

<?php

get_header();

$pass = $_POST['pass'];

if (isset($pass)){

  if ( $pass ==  get_field('password') ) {

        ?>

          <!-- <script type="text/javascript">

            window.location.replace("https://www.rightnowmediaatwork.org/Account/Invite/42f3003e-e3cb-48fd-a41d-1e2aaa4a347a");

          </script> -->

        <?php

  }else {


        ?>

          <div class="continer text-center" style="min-height: 80vh; padding: 30vh 0 20vh">

            <h4 class="bg-danger text-white rmb-3 p-1 mx-auto" style="display: inline-block;">Wrong password, please try again</h4>
            <form method="POST" action="">

            <h3 class="mb-3">Password</h3> <input type="password" name="pass"></input><br/>
            <input class="mt-4 " type="submit" name="submit" value="Submit"></input>
            </form>
          </div>

        <?php
  }


}else{

  if (isset($_POST)) {

    ?>
    <div class="continer text-center" style="min-height: 80vh; padding: 30vh 0 20vh">
      <form method="POST" action="">

      <h3 class="mb-3">Password</h3> <input type="password" name="pass"></input><br/>
      <input class="mt-4 " type="submit" name="submit" value="Submit"></input>
      </form>
    </div>

    <?php

  }

}


get_footer();
