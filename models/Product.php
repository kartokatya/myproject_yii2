<?php

namespace app\models;

use Yii;
use yii\base\Exception;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property int $active
 * @property int $price
 * @property string $old_price
 * @property string $image
 *
 * @property Category $category
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @method getImageSrc($size = null)
     * @property string $imageSrc
     */
    public function behaviors()
    {
        return [
            'imageUploaderBehavior' => [
                'class' => 'demi\image\ImageUploaderBehavior',
                'imageConfig' => [
                    // Name of image attribute where the image will be stored
                    'imageAttribute' => 'image',
                    // Yii-alias to dir where will be stored subdirectories with images
                    'savePathAlias' => 'images/products',
                    // Yii-alias to root project dir, relative path to the image will exclude this part of the full path
                    'rootPathAlias' => '/',
                    // Name of default image. Image placed to: webrooot/images/{noImageBaseName}
                    // You must create all noimage files: noimage.jpg, medium_noimage.jpg, small_noimage.jpg, etc.
                    'noImageBaseName' => '1.jpg',
                    // List of thumbnails sizes.
                    // Format: [prefix=>max_width]
                    // Thumbnails height calculated proportionally automatically
                    // Prefix '' is special, it determines the max width of the main image
                    'imageSizes' => [
                        '' => 1000,
                        'medium_' => 270,
                        'small_' => 70,
                        'my_custom_size' => 25,
                    ],
                    // This params will be passed to \yii\validators\ImageValidator
                    'imageValidatorParams' => [
                        'minWidth' => 400,
                        'minHeight' => 300,
                        // Custom validation errors
                        // see more in \yii\validators\ImageValidator::init() and \yii\validators\FileValidator::init()
                        'tooBig' => Yii::t('yii', 'The file "{file}" is too big. Its size cannot exceed {formattedLimit}.'),
                    ],
                    // Cropper config
                    'aspectRatio' => 4 / 3, // or 16/9(wide) or 1/1(square) or any other ratio. Null - free ratio
                    // default config
                    'imageRequire' => false,
                    'fileTypes' => 'jpg,jpeg,gif,png',
                    'maxFileSize' => 10485760, // 10mb
                    // If backend is located on a subdomain 'admin.', and images are uploaded to a directory
                    // located in the frontend, you can set this param and then getImageSrc() will be return
                    // path to image without subdomain part even in backend part
                    'backendSubdomain' => 'admin.',
                    // or if backend located by route '/admin/*'
                    'backendRoute' => '/admin',
                ],
            ],
        ];
    }



    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'active','main_page', 'price', 'old_price'], 'integer'],
            [['name'], 'required'],
            [['description', 'content'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
           //['image', 'string'],
            [['image'], 'file', 'extensions' => ['svg', 'jpg', 'png']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'name' => 'Заголовок',
            'description' => 'Описание',
            'content' => '',
            'active' => 'Опубликовать',
            'price' => 'Цена',
            'old_price' => 'Старая цена',
            'main_page'=>'Показывать на главной',
            'image'=>'Загрузите изображение',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getImage(){
        return $this->image;
    }

    /**
     * @return bool
     */
   /*public function upload()
    {
        if ($this->validate()) {

            try {
                $filename = 'uploads/' . $this->image->baseName . Yii::$app->security->generateRandomString(3) . '.' . $this->image->extension;
            } catch (Exception $e) {
            }

            $this->image->saveAs($filename);
            $this->image = '/' . $filename;

            return true;
        } else {
            return false;
        }
    }*/



    /*public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }*/




   /* public function beforeSave($insert)
    {
        $this->image = \yii\web\UploadedFile::getInstance($this,'image');
        $this->upload();

        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }*/
}
