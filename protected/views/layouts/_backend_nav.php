<header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="/images/ML_logo.png" alt="" style="width: 70px;" />
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (Yii::app()->user->isGuest) : ?>
                    <li style="margin-right: 20px;"><a href="/login" class="btn btn-default">Login</a></li>
                <?php else : ?>
                    <?php if (!Yii::app()->user->isMasterista(false)) : ?>
                        <li class="<?php echo Yii::app()->controller->action->id == 'dispense' ? 'active' : ''; ?>"><a href="/dispense">Dispense</a></li>
                    <?php endif; ?>
                    <?php if (Yii::app()->user->isProductManager()) : ?>
                        <li class="<?php echo Yii::app()->controller->action->id == 'accounts' ? 'active' : ''; ?>"><a href="/accounts">Accounts</a></li>
                    <?php endif; ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle<?php if (Yii::app()->user->getState('overruled') != null) echo ' fakeuser'; ?>" data-toggle="dropdown">
                            <?php echo Html::encode(Yii::app()->user->user->UserName); ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if (Yii::app()->user->isDeveloper() || Yii::app()->user->getState('overruled') != null) : ?>
                                <li><a href="/simulazione"><span class="fa fa-asterisk"></span> Simulazione</a></li>
                                <li class="divider"></li>
                            <?php endif; ?>
                            <?php if (Yii::app()->user->isMasterista()) : ?>
                                <li><a href="/privacy"><span class="fa fa-info-circle"></span> Informativa privacy</a></li>
                                <li class="divider"></li>
                            <?php endif; ?>
                            <li><a href="/logout"><span class="fa fa-power-off"></span> Logout</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>