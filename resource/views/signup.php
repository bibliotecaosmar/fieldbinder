<!--Content Itens Menu-->
                        <li method="post" name="view" value="index"><?php echo $this->index ?></li>
                        <li method="post" name="view" value="plant"><?php echo $this->plant ?></li>
                        <li method="post" name="view" value="animal"><?php echo $this->animal ?></li>
                        <li method="post" name="view" value="insect"><?php echo $this->insect ?></li>
                        <li method="post" name="view" value="mushroom"><?php echo $this->mushroom ?></li>
                        <li id="tabOn" method="post" name="view" value="signup"><?php echo $this->signup?></li>
                    </ul>
                    <div>
                        <!--Sidebar Dropdown Menu-->
                        <h2></h2>
                    <!--Signup Screen-->
                    <form method="post">
                        <label for="nickname"><?php echo $this->nickname ?></label>
                        <input type="text" name="nickname" placeholder=<?php echo $this->nickname ?>>
                        <label for="password"><?php echo $this->password ?></label>
                        <input type="text" name="password" placeholder=<?php echo $this->password ?>>
                        <label for="email"><?php echo $this->email ?></label>
                        <input type="text" name="email" placeholder=<?php echo $this->email ?>>
                        <label for="born"><?php echo $this->born ?></label>
                        <input type="text" name="born" placeholder=<?php echo $this->born ?>>
                    </form>