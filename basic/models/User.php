<?php

    namespace app\models;

    use Yii;
    use yii\db\ActiveRecord;

    /**
     * This is the model class for table "user".
     *
     * @property int $id
     * @property string|null $username
     * @property string|null $name
     * @property string|null $email
     * @property string|null $password
     * @property int|null $age
     * @property int|null $height
     * @property int|null $weight
     * @property string|null $sex
     * @property string|null $description
     * @property string|null $status
     */
    class User extends ActiveRecord implements \yii\web\IdentityInterface
    {


        public $authKey;
        public $accessToken;


        /**
         * {@inheritdoc}
         */
        public static function tableName()
        {
            return 'user';
        }

        /**
         * {@inheritdoc}
         */
        public function rules()
        {
            return [
                    [['age', 'height', 'weight'], 'integer'],
                    [['username', 'name', 'email', 'password'], 'string', 'max' => 100],
                    [['sex'], 'string', 'max' => 10],
                    [['description', 'status'], 'string', 'max' => 500],
            ];
        }

        /**
         * {@inheritdoc}
         */
        public function attributeLabels()
        {
            return [
                    'id' => 'ID',
                    'username' => 'Username',
                    'password' => 'Password',
                    'name' => 'Name',
                    'email' => 'Email',
                    'age' => 'Age',
                    'height' => 'Height',
                    'weight' => 'Weight',
                    'sex' => 'Sex',
                    'description' => 'Description',
                    'status' => 'Status',
            ];
        }

        public function attributes()
        {
            return [
                    'id',
                    'username',
                    'name',
                    'password',
                    'email',
            ];
        }

        /**
         * {@inheritdoc}
         */
        public static function findIdentity($id)
        {
            return User::findOne($id);
        }



        /**
         * Finds user by username
         *
         * @param string $username
         * @return static|null
         */
        public static function findByUsername($username)
        {
            return User::find()->where(['username' => $username])->one();
        }

        /**
         * Returns an ID that can uniquely identify a user identity.
         *
         * @return string|int an ID that uniquely identifies a user identity.
         */
        public function getId()
        {
            return $this->id;
        }
        /**
         * {@inheritdoc}
         */
        public function getAuthKey()
        {
            return $this->authKey;
        }

        /**
         * {@inheritdoc}
         */
        public function validateAuthKey($authKey)
        {
            return $this->authKey === $authKey;
        }

        /**
         * Validates password
         *
         * @param string $password password to validate
         * @return bool if password provided is valid for current user
         */
        public function validatePassword($password)
        {
            return $this->password === $password;
        }

        public function create()
        {
            return $this->save(false);
        }

        public static function findIdentityByAccessToken($token, $type = null)
        {
            // TODO: Implement findIdentityByAccessToken() method.
        }


    }
