<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>PHP Bad Words</title>
</head>

<body>
    <form action="print.php">
        <div class="container">
            <div class="row p-4 mt-5">
                <div class="d-flex gap-2">
                    <label for="paragraph" class="col-3">Insert a paragraph:</label>
                    <textarea name="paragraph" id="paragraph" rows="10" class="col-6" required></textarea>
                </div>
                <div class="d-flex gap-2 my-4">
                    <label for="bad-word" class="col-3">Insert a bad word:</label>
                    <input id="bad-word" name="bad-word" type="text" class="col-6" require>
                </div>
                <button type="submit" class="btn btn-dark col-4 mx-auto mt-5">Submit</button>
            </div>
        </div>


    </form>
</body>

</html>