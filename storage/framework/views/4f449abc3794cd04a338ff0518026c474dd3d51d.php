<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!--favicon-->
    <!--estilos-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!--header-->
    <!--nav-->

    <section style="padding-top:60px; ">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tiny MCE html Editory
                    </div>
                    <div class="card-body">
                        <form method="POST">
                                <?php echo csrf_field(); ?>
                                <textarea name="mytextare" id="mytextarea" cols="30" rows="10"></textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tiny.cloud/1/xni3snz0vhm6mt3x2vkuc9av49xax08z6q5mmbirjv37rxuy/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

        <script>
            tinymce.init({
                selector:'#mytextarea'
            });
        </script>

    <?php echo $__env->yieldContent('content'); ?>

    <!--footer-->

</body>

</html>
<?php /**PATH /home/diego/projects/proyectoDiegoSW1/resources/views/editor.blade.php ENDPATH**/ ?>