<?php
    /**
     * Created by PhpStorm.
     * User: triest
     * Date: 05.05.2020
     * Time: 14:41
     */

    namespace app\controllers;

    use app\models\Target;
    use app\models\User;
    use Yii;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;

    class AnketController extends Controller
    {

        public function actionCreate()
        {
            $username = Yii::$app->user->identity->username;

            if (Yii::$app->request->isPost) {

                $post = Yii::$app->request->post();
                var_dump($post);
            }

            $model = User::find(['*'])->where(['username' => $username])->one();

            $targets =Target::getEnabled();
            return $this->render('create', [
                    'model' => $model,
                    'targets' => $targets,
            ]);
        }
    }