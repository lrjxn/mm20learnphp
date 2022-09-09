<?php include('partials/header.php'); ?>
        <form action="/add" method="POST">
            <input class="input" type="text" name="title" required>
            <textarea class="textarea" name="body"></textarea>
            <input class="button is-primary" type="submit" value="Add">
        </form>
<?php include('partials/footer.php'); ?>