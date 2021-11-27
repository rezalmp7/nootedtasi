    <?php $page="login"; include('layout/header.php'); ?>
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Login</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <span>Login</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-img">
            <img src="assets/assets/images/page-title1.jpg" alt="About">
            <img src="assets/assets/images/shape16.png" alt="Shape">
            <img src="assets/assets/images/shape17.png" alt="Shape">
            <img src="assets/assets/images/shape18.png" alt="Shape">
        </div>
    </div>


    <div class="user-area ptb-100">
        <div class="container">
            <div class="user-item">
                <form method="POST" action="function/login.php">
                    <h2>Login</h2>
                    <div class="form-group">
                        <input type="username" name="username" class="form-control" placeholder="Username:">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password:">
                    </div>
                    <button type="submit" class="btn common-btn">
                        Login
                        <img src="assets/assets/images/shape1.png" alt="Shape">
                        <img src="assets/assets/images/shape2.png" alt="Shape">
                    </button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include('layout/footer.php');
    ?>