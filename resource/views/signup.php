<!--Content Itens Menu-->
                        <input id="Signup" type="submit" hidden="value" name="view" value="signup"/><label for="Signup"><?php echo $this->signup?></label>
                    </form><br>
                    <!--Signup Screen-->
                    <form method="post">
                        <label for="Nickname"><?php echo $this->nickname ?></label>
                        <input id="Nickname" type="text" name="nickname" placeholder=<?php echo $this->nickname ?>><br>
                        <label for="Password"><?php echo $this->password ?></label>
                        <input id="Password" type="text" name="password" placeholder=<?php echo $this->password ?>><br>
                        <label for="Email"><?php echo $this->email ?></label>
                        <input id="Email" type="text" name="email" placeholder=<?php echo $this->email ?>><br>
                        <label for="Born"><?php echo $this->born ?></label>
                        <input id="Born" type="text" name="born" placeholder=<?php echo $this->born ?>><br>
                        <input type="hidden" name="view" value="signup">
                        <input type="submit" value="<?php echo $this->submit ?>">
                    </form>