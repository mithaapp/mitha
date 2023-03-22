<?=view('partials/header');?>
    <div class="container content-padding">
        <div class="row">
            <div class="col-md-12">
                <div class="text-justify">
                    <div class="card text-dark border-danger">
                        <div class="card-header">
                            <?=$title;?>
                        </div>
                        <div class="card-body">
                            <?=$content;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?=view('partials/footer');?>