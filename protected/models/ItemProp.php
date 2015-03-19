<?php

/**
 * This is the model class for table "item_prop".
 *
 * The followings are the available columns in table 'item_prop':
 * @property string $item_prop_id
 * @property string $category_id
 * @property string $parent_prop_id
 * @property string $parent_value_id
 * @property string $prop_name
 * @property string $prop_alias
 * @property integer $type
 * @property integer $is_key_prop
 * @property integer $is_sale_prop
 * @property integer $is_color_prop
 * @property integer $must
 * @property integer $multi
 * @property string $status
 * @property integer $sort_order
 * @property string $item_propcol
 * @property integer $is_combo_prop
 * @property string  $prop_title
 * @property string  $prop_desc
 *
 * The followings are the available model relations:
 * @property Category $category
 * @property PropValue[] $propValues
 */
class ItemProp extends YActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{item_prop}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('category_id, prop_name, type', 'required'),
            array('type, is_key_prop, is_sale_prop, is_color_prop, must, multi, sort_order , is_combo_prop , is_room_prop', 'numerical', 'integerOnly' => true),
            array('category_id, parent_prop_id, parent_value_id', 'length', 'max' => 10),
            array('prop_name, prop_alias', 'length', 'max' => 100),
            array('status', 'length', 'max' => 7),
            array('item_propcol', 'length', 'max' => 45),
	        array('prop_title', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('item_prop_id, category_id, parent_prop_id, parent_value_id, prop_name, prop_alias, type, is_key_prop, is_sale_prop, is_color_prop, must, multi, status, sort_order, item_propcol,is_room_prop,prop_title, prop_desc', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
            'propValues' => array(self::HAS_MANY, 'PropValue', 'item_prop_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'item_prop_id' =>Yii::t('backend','属性编号'),
            'category_id' => Yii::t('backend','分类'),
            'parent_prop_id' => Yii::t('backend','父属性'),
            'parent_value_id' => Yii::t('backend','属性值'),
            'prop_name' => Yii::t('backend','属性名字'),
            'prop_alias' => 'Prop Alias',
            'type' => Yii::t('backend','类型'),
            'is_key_prop' => Yii::t('backend','是否关键属性'),
            'is_sale_prop' => Yii::t('backend','是否销售属性'),
            'is_color_prop' => Yii::t('backend','是否颜色属性'),
            'must' => Yii::t('backend','是否必选属性'),
            'multi' => Yii::t('backend','是否可以多选'),
            'is_combo_prop' => Yii::t('backend','是否套餐'),
            'is_room_prop' => Yii::t('backend','是否房间'),
            'status' => Yii::t('backend','状态'),
            'sort_order' =>Yii::t('backend','排序') ,
            'item_propcol' => 'Item Propcol',
            'prop_title' =>Yii::t('backend','提示标题') ,
            'prop_desc' =>Yii::t('backend','提示详情') ,
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('item_prop_id', $this->item_prop_id, true);
        $criteria->compare('category_id', $this->category_id, true);
        $criteria->compare('parent_prop_id', $this->parent_prop_id, true);
        $criteria->compare('parent_value_id', $this->parent_value_id, true);
        $criteria->compare('prop_name', $this->prop_name, true);
        $criteria->compare('prop_alias', $this->prop_alias, true);
        $criteria->compare('type', $this->type);
        $criteria->compare('is_key_prop', $this->is_key_prop);
        $criteria->compare('is_sale_prop', $this->is_sale_prop);
        $criteria->compare('is_color_prop', $this->is_color_prop);
	    $criteria->compare('is_combo_prop', $this->is_combo_prop);
	    $criteria->compare('is_room_prop', $this->is_room_prop);
        $criteria->compare('must', $this->must);
        $criteria->compare('multi', $this->multi);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('sort_order', $this->sort_order);
        $criteria->compare('item_propcol', $this->item_propcol, true);
	    $criteria->compare('prop_title' ,$this->prop_title,true);
	    $criteria->compare('prop_desc' ,$this->prop_desc,true);


        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ItemProp the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function defaultScope()
    {
        return array(
//            'condition' => $this->getTableAlias() . '.status = 1',
//            'order' => $this->getTableAlias() . '.sort_order desc',
        );
    }

    /**
     * get attribute value for display
     * @param string $name
     * @param array $parameters
     * @return array|mixed
     * @author Lujie.Zhou(gao_lujie@live.cn, qq:821293064).
     */
    public function __call($name, $parameters)
    {
        $prefix = substr($name, 0, 2);
        if ($prefix === 'is') {
            $key = strtolower(substr($name, 2));
            if (in_array($key, array('key', 'sale', 'color','room'))) {
                return $this->{'is_' . $key . '_prop'};
            }
            if (in_array($key, array('must', 'multi'))) {
                return $this->{$key};
            }
        }
        $prefix = substr($name, 0, 3);
        if ($prefix === 'all') {
            $key = strtolower(substr($name, 3));
            switch ($key) {
                case 'type':
                    return array(1 => 'input', 2 => 'optional', 3 => 'multiCheck');
                case 'status':
                    return array(1 => 'normal', 0 => 'delete');
                default:
                    if (in_array($key, array('key', 'sale', 'color', 'must', 'multi','combo','room'))) {
                        return array(0 => 'No', 1 => 'Yes');
                    }
            }
        }
        if ($prefix === 'get') {
            $key = strtolower(substr($name, 3));
            switch ($key) {
                case 'type':
                    $data = array(1 => 'input', 2 => 'optional', 3 => 'multiCheck');
                    break;
                case 'status':
                    $data = array(1 => 'normal', 0 => 'delete');
                    break;
                default:
                    if (in_array($key, array('key', 'sale', 'color', 'must', 'multi', 'combo', 'room'))) {
                        $data = array(0 => 'No', 1 => 'Yes');
                    }
                    if (in_array($key, array('key', 'sale', 'color', 'combo', 'room'))) {
                        $key = 'is_' . $key . '_prop';
                    }
                    break;
            }
            if (isset($data[$this->$key]))
                return $data[$this->$key];
        }
        return parent::__call($name, $parameters);
    }

    /**
     * get category list data
     * @param int $root
     * @return mixed
     * @author Lujie.Zhou(gao_lujie@live.cn, qq:821293064).
     */
    public function getCategory($root = 3)
    {
        return Category::model()->getSelectOptions($root);
    }

    public function getPropValues()
    {
        $cri = new CDbCriteria(array(
            'condition' => 'item_prop_id =' . $this->item_prop_id,
            'order' => 'sort_order asc, prop_value_id asc'
        ));
        $PropValues = PropValue::model()->findAll($cri);

        foreach ($PropValues as $sv) {
            echo $sv->value_name . ',';
        }
    }

    public function getPropOptionValues($label = '', $selected = '')
    {
        $cri = new CDbCriteria(array(
            'condition' => 'item_prop_id =' . $this->item_prop_id,
            'order' => 'sort_order asc, prop_value_id asc'
        ));
        $PropValues = PropValue::model()->findAll($cri);
        $list = CHtml::listData($PropValues, 'prop_value_id', 'value_name');
        $data = array();
        foreach ($list as $k => $v) {
            $data[$this->item_prop_id . ':' . $k] = $v;
        }
        echo CHtml::DropDownList('Item[props][' . $this->item_prop_id . ']', $selected, $data, array('empty' => '请选择', 'label' => $label));
    }

    public function getPropTextFieldValues($label = '', $value = '')
    {
        echo CHtml::textField('Item[props][' . $this->item_prop_id . ']', $value, array('label' => $label));
    }

    public function getPropArrayValues()
    {
        $cri = new CDbCriteria(array(
            'condition' => 'item_prop_id =' . $this->item_prop_id,
            'order' => 'sort_order asc, prop_value_id asc'
        ));
        $PropValues = PropValue::model()->findAll($cri);
        foreach ($PropValues as $sv) {
            $array[] = $sv->value_name;
        }
        return $array;
    }

    public function getPropCheckBoxListValues($label = '', $selected = '', $class = '', $type = 'props', $child_type = '')
    {
        $cri = new CDbCriteria(array(
            'condition' => 'item_prop_id =' . $this->item_prop_id,
            'order' => 'sort_order asc, prop_value_id asc'
        ));
        $PropValues = PropValue::model()->findAll($cri);

        $list = CHtml::listData($PropValues, 'prop_value_id', 'value_name');
        foreach ($list as $k => $v) {
            $data[$this->item_prop_id . ':' . $k] = $v;
        }
        echo '<ul class="sku-list">';
        if ($child_type) {
            echo CHtml::checkBoxList('Item[' . $type . '][' . $child_type . '][' . $this->item_prop_id . ']', $selected, $data,
                array('template' => '<label class="checkbox inline">{input}{label}</label>', 'label' => $label, 'separator' => '', 'class' => $class, 'labelOptions' => array('class' => 'labelForRadio')));
        } else {
            echo CHtml::checkBoxList('Item[' . $type . '][' . $this->item_prop_id . ']', $selected, $data,
                array('template' => '<label class="checkbox inline">{input}{label}</label>', 'label' => $label, 'separator' => '', 'class' => $class, 'labelOptions' => array('class' => 'labelForRadio')));
        }
        echo '</ul>';
    }


    /**
     * delete  Relational Active Record
     * @return bool
     */
    public function beforeDelete(){
        self::deleteRelationData($this->propValues);
        return parent::beforeDelete();
    }
    public function deleteRelationData($data){
        $num=count($data);
        if($num>0){
            if($num>1){
                for($i=0;$i<$num;$i++){
                    $data[$i]->delete();
                }
            }else{
                $data->delete();}
        }

    }
}
