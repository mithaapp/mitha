<?=view('partials/header');?>
<div class="container content-padding">
    <div class="row">
        <div class="col-md-12">
            <div class="text-justify">
                <div class="card text-dark border-danger">
                    <div class="card-header">
                        Error Message
                    </div>
                    <div class="card-body">
                        <p>Message : <?=$e->getMessage();?></p>
                        <p>File : <?=$e->getFile();?></p>
                        <p>Line : <?=$e->getLine();?></p>
                    </div>
                </div>
                <br>
                <div class="card text-dark border-danger">
                    <div class="card-header">
                        Error Traces
                    </div>
                    <div class="card-body">
                        <?php
                        $trace = $e->getTrace();
                        if(!empty($trace)) {
                            foreach ($trace as $item) {
                                if (isset($item['function'])) {
                                    $class = isset($item['class']) ? $item['class'].$item['type'] : null;
                                    echo '<p>Function : '.$class.$item['function'].'()</br>';
                                }
                                if (isset($item['file'])) {
                                    echo 'File : '.$item['file'].'</br>';
                                }
                                if (isset($item['line'])) {
                                    echo 'Line : '.$item['line'].'</p>';
                                }
                                echo '<hr>';
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?=view('partials/footer');?>