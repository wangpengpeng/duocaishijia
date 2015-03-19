<?php

/**
 * This is the model class for table "item".
 *
 * The followings are the available columns in table 'item':
 * @property string $item_id
 * @property string $category_id
 * @property string $outer_id
 * @property string $title
 * @property string $stock
 * @property string $min_number
 * @property string $price
 * @property string $currency
 * @property string $props
 * @property string $props_name
 * @property string $desc
 * @property string $shipping_fee
 * @property integer $is_show
 * @property integer $is_promote
 * @property integer $is_new
 * @property integer $is_hot
 * @property integer $is_best
 * @property string $click_count
 * @property string $wish_count
 * @property string $create_time
 * @property string $update_time
 * @property string $language
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $warn_desc
 * @property string $warn_url
 * @property string $items_url
 * @property string $erpID
 * The followings are the available model relations:
 * @property Category $category
 * @property Area $countryArea
 * @property Area $stateArea
 * @property Area $cityArea
 * @property ItemImg[] $itemImgs
 * @property OrderItem[] $orderItems
 * @property PropImg[] $propImgs
 * @property Sku[] $skus
 */
class Item extends YActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'item';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('category_id, title, price, currency, props, props_name, desc, language, country, state', 'required'),
            array('is_show, is_promote, is_new, is_hot, is_best', 'numerical', 'integerOnly' => true),
            array('category_id, stock, min_number, price, shipping_fee, click_count, wish_count, review_count,deal_count,create_time, update_time, country, state, city', 'length', 'max' => 10),
            array('outer_id, language', 'length', 'max' => 45),
            array('title,warn_desc,warn_url,items_url,erpID', 'length','max' => 255),
            array('currency', 'length', 'max' => 20),
            array('create_time, update_time', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('item_id, category_id, outer_id, title, stock, min_number, price, currency, props, props_name, desc, shipping_fee, is_show, is_promote, is_new, is_hot, is_best, click_count, wish_count, create_time, update_time, language, country, state, city, items_url', 'safe', 'on' => 'search'),
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
            'countryArea' => array(self::BELONGS_TO, 'Area', 'country'),
            'stateArea' => array(self::BELONGS_TO, 'Area', 'state'),
            'cityArea' => array(self::BELONGS_TO, 'Area', 'city'),
            'itemImgs' => array(self::HAS_MANY, 'ItemImg', 'item_id'),
            'orderItems' => array(self::HAS_MANY, 'OrderItem', 'item_id'),
            'propImgs' => array(self::HAS_MANY, 'PropImg', 'item_id'),
            'skus' => array(self::HAS_MANY, 'Sku', 'item_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'item_id' => '商品编码',
            'category_id' => '商品分类',
            'outer_id' => 'Outer',
            'title' => '标题',
            'stock' => '库存',
            'min_number' => '最小购买数量',
            'price' => '价格',
            'currency' => '计价单位',
            'props' => 'Props',
            'props_name' => 'Props Name',
            'desc' => '商品描述',
            'shipping_fee' => 'Shipping Fee',
            'is_show' => '展示',
            'is_promote' => '促销',
            'is_new' => '新品',
            'is_hot' => '热销',
            'is_best' => '最好',
            'click_count' => '单击次数',
            'wish_count' => 'Wish Count',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
            'language' => '语言',
            'country' => '国家',
            'state' => '省份',
            'city' => '城市',
	        'warn_desc' => '温馨提示',
	        'warn_url' => '提示连接',
	        'items_url' => '选购产品URL',
	        'erpID'  =>'erpID',
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

        $criteria->compare('item_id', $this->item_id, true);
        $criteria->compare('category_id', $this->category_id, true);
        $criteria->compare('outer_id', $this->outer_id, true);
        $criteria->compare('title', $this->title, true);
//        $criteria->compare('Keywords', $this->Keywords, true);
//        $criteria->compare('description', $this->description, true);
        $criteria->compare('stock', $this->stock, true);
        $criteria->compare('min_number', $this->min_number, true);
        $criteria->compare('price', $this->price, true);
        $criteria->compare('currency', $this->currency, true);
        $criteria->compare('props', $this->props, true);
        $criteria->compare('props_name', $this->props_name, true);
        $criteria->compare('desc', $this->desc, true);
        $criteria->compare('shipping_fee', $this->shipping_fee, true);
        $criteria->compare('is_show', $this->is_show);
        $criteria->compare('is_promote', $this->is_promote);
        $criteria->compare('is_new', $this->is_new);
        $criteria->compare('is_hot', $this->is_hot);
        $criteria->compare('is_best', $this->is_best);
        $criteria->compare('click_count', $this->click_count, true);
        $criteria->compare('wish_count', $this->wish_count, true);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('update_time', $this->update_time, true);
        $criteria->compare('language', $this->language, true);
        $criteria->compare('country', $this->country, true);
        $criteria->compare('state', $this->state, true);
        $criteria->compare('city', $this->city, true);
	    $criteria->compare('items_url', $this->items_url, true);
	    $criteria->compare('erpID', $this->items_url, true);
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Item the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function beforeSave()
    {
        if ($this->isNewRecord)
            $this->create_time = $this->update_time = time();
        else
            $this->update_time = time();
        return parent::beforeSave();
    }

    /**
     * delete  Relational Active Record
     * @return bool
     */
    public function beforeDelete(){
        self::deleteRelationData($this->itemImgs);
        self::deleteRelationData($this->orderItems);
        self::deleteRelationData($this->propImgs);
        self::deleteRelationData($this->skus);
        return parent::beforeDelete();
    }


    public function deleteRelationData($data){
        $num=count($data);
        if($num>0){
            if($num>1){
                for($i=0;$i<$num;$i++){
                    $data[$i]->delete();
                }
            }else
                $data->delete();
        }

    }
    /**
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
            if (in_array($key, array('show', 'promote', 'new', 'hot', 'best'))) {
                return $this->{'is_' . $key};
            }
        }
        $prefix = substr($name, 0, 3);
        if ($prefix === 'all') {
            $key = strtolower(substr($name, 3));
            if (in_array($key, array('show', 'promote', 'new', 'hot', 'best'))) {
                return array(0 => 'No', 1 => 'Yes');
            }
        }


        return parent::__call($name, $parameters);
    }

    public function getAreas()
    {
        $areasData = array();
        $areas = Area::model()->findAllByAttributes(array('grade' => 0));
        $areasData[] = CMap::mergeArray(array('0' => ''), CHtml::listData($areas, 'area_id', 'name'));
        foreach (array('country', 'state') as $area) {
            $areas = Area::model()->findAllByAttributes(array('parent_id' => $this->{$area}));
            $areasData[] = CMap::mergeArray(array('0' => ''), CHtml::listData($areas, 'area_id', 'name'));
        }
        return $areasData;
    }
    public function showIsShow($is_show){
        $isShow=array('0'=>'待展示','1'=>'已展示');
        return $isShow[$is_show];
        }
    public function showIsPromote($is_promote){
        $ispromote=array('0'=>'不促销','1'=>'促销');
        return $ispromote[$is_promote];
    }
    public function showIsNew($is_new){
        $isnew=array('0'=>'不是新品','1'=>'新品');
        return $isnew[$is_new];
    }
    public function showIsHot($is_hot){
        $ishot=array('0'=>'不是热卖','1'=>'热卖中');
        return $ishot[$is_hot];
    }
    public function showIsBest($is_best){
        $isbest=array('0'=>'不是最好','1'=>'最好的');
        return $isbest[$is_best];
    }
    /**
     * get items by category, include children category items
     * @param $category
     * @param $limit
     * @return CActiveRecord[]
     * @author Lujie.Zhou(gao_lujie@live.cn, qq:821293064).
     */
    public function getItemsByCategory($category, $limit = -1)
    {
        $categoryIds = $category->getDescendantIds();
        $cri = new CDbCriteria();
        $cri->addInCondition('category_id', $categoryIds);
	    $cri->addInCondition('is_show', array(':is_show' => 1));
        $cri->limit = $limit;
        return self::model()->findAll($cri);
    }

    /**
     * get item pic url list
     * @return array
     * @author Lujie.Zhou(gao_lujie@live.cn, qq:821293064).
     */
    public function getItemPics($width = 200, $height = 200)
    {
        $itemImgs = ItemImg::model()->findAllByAttributes(array('item_id' => $this->item_id));
        return CHtml::listData($itemImgs, 'item_img_id', 'pic');
    }

    /**
     * get item main pic (position = 0)
     * @return mixed
     * @author Lujie.Zhou(gao_lujie@live.cn, qq:821293064).
     */
    public function getMainPic($width = 200, $height = 200)
    {
        $itemImg = ItemImg::model()->findByAttributes(array('item_id' => $this->item_id, 'position' => 0));
        return $itemImg->pic;
        return ImageHelper::thumb($width, $height, $itemImg->pic);
    }

//    public function defaultScope()
//    {
//        return array('condition' => 'is_show = 0');
//    }

    public function scopes()
    {
        return array(
            'promote' => array(
                'condition' => 't.is_promote = 1'
            ),
            'new' => array(
                'condition' => 't.is_new = 1'
            ),
            'hot' => array(
                'condition' => 't.is_hot = 1'
            ),
            'best' => array(
                'condition' => 't.is_best = 1'
            ),
        );
    }

    #region to delete
    /**
     * get item title
     * @return string
     */
    public function getTitle()
    {
        return CHtml::link(F::msubstr($this->title, '0', '15', 'utf-8'), array('/item/view', 'id' => $this->item_id), array('title' => $this->title, 'target' => '_blank'));
    }

    /**
     * 得到商品URL地址
     * @return string the URL that shows the detail of the item
     */
    public function getUrl()
    {
        if (F::utf8_str($this->title) == '1') {
            $title = str_replace('/', '-', $this->title);
        } else {
            $pinyin = new Pinyin($this->title);
            $title = $pinyin->full2();
            $title = str_replace('/', '-', $title);
        }
        return Yii::app()->createUrl('item/view', array(
            'id' => $this->item_id,
            'title' => $title,
        ));
    }

    /**
     * @return string
     */
    public function getBtnList()
    {
        return CHtml::textField('qty', $this->min_number, array('style' => 'width:20px', 'size' => '2', 'maxlength' => '5', 'id' => 'qty_' . $this->item_id)) . '&nbsp;'
        . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/btn_buy.gif'), '#', array('id' => 'btn-buy-' . $this->item_id, 'onclick' => 'fastBuy(this, ' . $this->item_id . ', $("#qty_' . $this->item_id . '").val())'
        ))
        . '&nbsp;' . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/btn_addwish.gif'), '#', array('id' => 'btn-addwish-' . $this->item_id, 'onclick' => 'addWish(this, ' . $this->item_id . ')'
        ));
    }

    /**
     * get main picture path
     * @return string
     * @author milkyway(yhxxlm@gmail.com)
     */
    public function getMainPicPath()
    {
        $images = ItemImg::model()->findAllByAttributes(array('item_id' => $this->item_id));
        foreach ($images as $k => $v) {
            if ($v['position'] == 0) {
                return '/upload/item/image/' . $v['url'];
            }
        }
    }

    /**
     * get main picture original path
     * @return string
     * @author milkyway(yhxxlm@gmail.com)
     */
    public function getMainPicOriginalPath()
    {
        $images = ItemImg::model()->findAllByAttributes(array('item_id' => $this->item_id));
        foreach ($images as $k => $v) {
            if ($v['position'] == 0) {
                return dirname(F::basePath()) . '/upload/item/image/' . $v['url'];
            }
        }
    }

    /**
     * get main picture url
     * @return string
     * @author milkyway(yhxxlm@gmail.com)
     */
    public function getMainPicUrl()
    {
        return F::baseUrl() . $this->getMainPicPath();
    }

    /**
     * get holder js
     * @param string $width
     * @param string $height
     * @param string $text
     * @return string
     * @author milkyway(yhxxlm@gmail.com)
     */
    public function getHolderJs($width, $height , $text = 'No Pic')
    {
        return 'holder.js/' . $width . 'x' . $height . '/text:' . $text;
    }

    /**
     * get item main picture
     * @param string $width
     * @param string $height
     * @return mixed
     * @author milkyway(yhxxlm@gmail.com)
     */
//    public function getMainPic($width = '310', $height = '310')
//    {
//        $img = $this->getMainPicPath();
//        if (file_exists($this->getMainPicOriginalPath())) {
//            $img_thumb = F::baseUrl() . ImageHelper::thumb($width, $height, $img, array('method' => 'resize'));
//            $img_thumb = str_replace('/upload', 'http://' . F::sg('site', 'imageDomain'), $img_thumb);
//            $img_thumb_now = CHtml::image($img_thumb, $this->title);
//            return CHtml::link($img_thumb_now, $this->getUrl(), array('title' => $this->title));
//        } else {
//            return CHtml::link(CHtml::image($this->getHolderJs($width, $height)), $this->getUrl(), array('title' => $this->title));
//        }
//    }

    /**
     * get item image gallery
     * @return array
     * @author milkyway(yhxxlm@gmail.com)
     */
    public function getItemGallery()
    {
        $images = ItemImg::model()->findAllByAttributes(array('item_id' => $this->item_id));
        foreach ($images as $k => $v) {
            $imageList[] = 'http://' . F::sg('site', 'imageDomain') . '/store/' . $v->store_id . '/item/image/' . $v['url'];
        }
        return $imageList;
    }

    /**
     * 分类属性
     *
     * @param int $id 分类ID
     * @param boolean $returnAttr false则返回分类列表，true则返回该对象的分类值
     * @param string $index 结合$returnAttr使用。如果$returnAttr为true，
     *              若指定$index，则返回指定$index对应的值，否则返回当前对象对应的分类值
     * @param int $level 层级
     * @return mixed
     * @author 鸟人(qq:170915870 DavidHHuan@126.com)
     */
    public function attrCategory($id, $returnAttr = false, $index = null, $level = 1)
    {
        $data = array();
        $category = Category::model()->findByPk($id);
        $descendants = $category->descendants()->findAll();
        $data = Category::model()->getSelectOptions($descendants);
        if ($returnAttr && $index && isset($data[$index]))
            $data = $data[$index];
        return $data;
    }

    public function afterSave()
    {
        parent::afterSave();
    }

    /**
     * update props data
     * @author Lonely(qq:81106404)
     */
    public function update_props_data()
    {
        $rawData = CJSON::decode($this->props, true);
        $opids = array();
        $opnames = array();

//        print_r($rawData);

        foreach ($rawData as $k => $v) {
            if (is_array($v)) {

                foreach ($v as $sk => $sv) {
                    $tmpArr = explode(":", $sv);
                    if (count($tmpArr) > 1) {
                        $opids[] = $sv;
                        $opnames[] = self::get_props_values_combine($sv);
                    }
                }


            } else {
                $tmpArr = explode(":", $v);

                if (count($tmpArr) > 1) {
                    $opids[] = $sv;
                    $opnames[] = self::get_props_values_combine($v);
                }
            }

        }

        $props_data = implode(";", $opids);
        $props_name = implode(";", $opnames);

        $sql = 'UPDATE {{item}} SET `props_data`="' . $props_data . '",`props_name`="' . $props_name . '" WHERE item_id=' . $this->item_id;

        Yii::app()->db->createCommand($sql)->execute();


    }

    /**
     * get props values combine
     * @param $arr
     * @return string
     * @author Lonely(qq:81106404)
     */
    public static function get_props_values_combine($arr)
    {
        $op = ItemProp::model()->findByPk($arr[0]);
        $opv = PropValue::model()->findByPk($arr[1]);
        $data = $arr[0] . ":" . $arr[1] . ":" . F::strip_prop_strto_csv($op->prop_name) . ":" . F::strip_prop_strto_csv($opv->value_name);

        return $data;
    }

    #endregion
}