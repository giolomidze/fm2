<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
                <form action="" method="POST" role="form">
                    <legend><?php echo $this->language->translate('login_form'); ?></legend>

                    <div class="form-group">
                        <label for=""><?php echo $this->language->translate('email'); ?></label>
                        <input type="text" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for=""><?php echo $this->language->translate('password'); ?></label>
                        <input type="password" class="form-control" id="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
