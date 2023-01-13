<!DOCTYPE html>
<html lang="en">

<head>
    <title>CakePHP 4 Image Upload With Form Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2 style="text-align: center;"> Image Upload With Form Data</h2>
        <div class="panel panel-primary">
            <div class="panel-heading">Image Upload With Form Data</div>
            <div class="panel-body">

                <?= $this->Flash->render() ?>

                <?= $this->Form->create($product, ["enctype" => "multipart/form-data"]) ?>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="image" class="form-control" class="image">
                </div>
                <div class="form-group">
                    <input type="number" min="0" name="cost" class="form-control" placeholder="Cost">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>

</body>

</html>