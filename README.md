Air datepicker
==============
Air datepicker

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist readly24/yii2-air-datepicker "*"
```

or add

```
"readly24/yii2-air-datepicker": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= $form->field($model, 'birth')->widget(
                                    DatePicker::className(), [
                                        'options' => [
											                  'class' => '',
                                        ],
                                        'clientOptions' => [
                                            'autoClose' => true,
                                            'dateFormat' =>'dd/mm/yyyy'

                                        ],

                                    ]
                                )?>
