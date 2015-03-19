<?php

/**
 * This is the model class for table "prop_img".
 *
 * The followings are the available columns in table 'prop_img':
 * @property string $prop_img_id
 * @property string $item_id
 * @property string $item_prop_value
 * @property string $pic
 * @property string $create_time
 * @property string $prop_value_id
 *
 * The followings are the available model relations:
 * @property Item $item
 */
class PropImg extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'prop_img';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that 
        // will receive user inputs. 
        return array(
            array('item_id, item_prop_value, pic, create_time, prop_value_id', 'required'),
            array('item_id, create_time, prop_value_id', 'length', 'max'=>10),
            array('item_prop_value, pic', 'length', 'max'=>255),
            // The following rule is used by search(). 
            // @todo Please remove those attributes that should not be searched. 
            array('prop_img_id, item_id, item_prop_value, pic, create_time,prop_value_id', 'safe', 'on'=>'search'),
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
            'item' => array(self::BELONGS_TO, 'Item', 'item_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'prop_img_id' => 'Prop Img',
            'item_id' => 'Item',
            'item_prop_value' => 'Item Prop Value',
            'pic' => 'Pic',
            'create_time' => 'Create Time',
	        'prop_value_id' => 'Prop Value Id'
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

        $criteria=new CDbCriteria;

        $criteria->compare('prop_img_id',$this->prop_img_id,true);
        $criteria->compare('item_id',$this->item_id,true);
        $criteria->compare('item_prop_value',$this->item_prop_value,true);
        $criteria->compare('pic',$this->pic,true);
        $criteria->compare('create_time',$this->create_time,true);
	    $criteria->compare('prop_value_id',$this->prop_value_id,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return PropImg the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
} 