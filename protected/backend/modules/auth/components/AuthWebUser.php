<?php
/**
 * AuthWebUser class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2013-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package auth.components
 */

/**
 * Web user that allows for passing access checks when enlisted as an administrator.
 *
 * @property boolean $isAdmin whether the user is an administrator.
 */
class AuthWebUser extends CWebUser
{
    /**
     * @var string[] a list of names for the users that should be treated as administrators.
     */
    public $admins = array('admin');

    /**
     * Initializes the component.
     */
    public function init()
    {
        parent::init();
        $this->setIsAdmin(in_array($this->name, $this->admins));
    }

    /**
     * Returns whether the logged in user is an administrator.
     * @return boolean the result.
     */
    public function getIsAdmin()
    {
        return $this->getState('__isAdmin', false);
    }

    /**
     * Sets the logged in user as an administrator.
     * @param boolean $value whether the user is an administrator.
     */
    public function setIsAdmin($value)
    {
        $this->setState('__isAdmin', $value);
    }

    /**
     * Performs access check for this user.
     * @param string $operation the name of the operation that need access check.
     * @param array $params name-value pairs that would be passed to business rules associated
     * with the tasks and roles assigned to the user.
     * @param boolean $allowCaching whether to allow caching the result of access check.
     * @return boolean whether the operations can be performed by this user.
     */
    public function checkAccess($operation, $params = array(), $allowCaching = true)
    {
        if ($this->getIsAdmin()) {
            return true;
        }

        return parent::checkAccess($operation, $params, $allowCaching);
    }

    public function updateSession() {
        $user = Yii::app()->getModule('user')->user($this->id);
        if(is_object($user)) {
            $this->name = $user->username;
            $userAttributes = CMap::mergeArray(array(
                'email'=>$user->email,
                'username'=>$user->username,
                'create_at'=>$user->create_at,
                'lastvisit_at'=>$user->lastvisit_at,
            ),$user->profile->getAttributes());
            foreach ($userAttributes as $attrName=>$attrValue) {
                $this->setState($attrName,$attrValue);
            }
        }
    }

	public function isCustomService () {
		/** @var UserModule $webUser */
		$webUser = Yii::app()->user;
		$userId = $webUser->getId();

		$am = Yii::app()->getAuthManager();
		$assignments = $am->getAuthAssignments($userId);
		$authItems = $am->getItemsPermissions(array_keys($assignments));  //私有方法必须使用 getItemsPermission才能访问

		foreach ($authItems as $role) {
			if ($role["name"] == "客服") {
				return true;
			}
		}
		return false;
	}
}
