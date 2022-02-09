<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class=" container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Registation form </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3">full name</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="full_name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" required class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3">phone </label>
                                <div class="col-md-9">
                                    <input type="number" required class="form-control" name="email">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3">subject</label>
                                <div class="col-md-9">
                                    <label> <input type="checkbox" name="subject[]" value="bangla"/> bangla</label>
                                    <label> <input type="checkbox" name="subject[]" value="english"/> english</label>
                                    <label> <input type="checkbox" name="subject[]" value="physics"/> physics</label>
                                    <label> <input type="checkbox" name="subject[]" value="math"/> math</label>
                                    <label> <input type="checkbox" name="subject[]" value="cse"/> cse</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="register_btn" value="submit">
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

