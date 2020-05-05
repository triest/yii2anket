<?php

    namespace app\controllers;

    use app\models\LoginForm;
    use app\models\SignupForm;
    use Yii;

    class UserController extends \yii\web\Controller
    {
        public function actionIndex()
        {
            return $this->render('index');
        }

        public function actionLogin()
        {
            if (!Yii::$app->user->isGuest) {
                return $this->goHome();
            }
            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post()) && $model->login()) {


               // return $this->redirect('/');
              //  return $this->redirect(['site/index']);
            }
            $model->password = '';


            return $this->render('login', [
                    'model' => $model,
            ]);
        }

        public function actionSingup()
        {
            $model = new SignupForm();

            if (Yii::$app->request->isPost) {
                $model->load(Yii::$app->request->post());
                if ($user = $model->signup()) {
                    return $this->redirect(['site/index']);
                }
            }

            return $this->render('singup', ['model' => $model]);
        }


    }
