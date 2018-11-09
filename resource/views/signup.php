<!--Content Itens Menu-->
                        <input id="Signup" type="submit" hidden="value" name="view" value="signup"/><label for="Signup"><?php echo $this->signup?></label>
                    </form><br>
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