<!--Content Itens Menu-->
                            <li><?php echo parent::$index ?></li>
                            <li><?php echo parent::$plant ?></li>
                            <li><?php echo parent::$animal ?></li>
                            <li><?php echo parent::$insect ?></li>
                            <li><?php echo parent::$mushroom ?></li>
                            <li id="tabOn"><?php echo parent::$signup?></li>
                        </ul>
                        <div>
                            <!--Sidebar Dropdown Menu-->
                            <h2></h2>
                        <!--Signup Screen-->
                        <form>
                            <label for="nickname"><?php echo parent::$nickname ?></label>
                            <input type="text" name="nickname" placeholder=<?php echo parent::$nickname ?>>
                            <label for="password"><?php echo parent::$password ?></label>
                            <input type="text" name="password" placeholder=<?php echo parent::$password ?>>
                            <label for="email"><?php echo parent::$email ?></label>
                            <input type="text" name="email" placeholder=<?php echo parent::$email ?>>
                            <label for="born"><?php echo parent::$born ?></label>
                            <input type="text" name="born" placeholder=<?php echo parent::$born ?>>
                        </form>