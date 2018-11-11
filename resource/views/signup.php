<!--Content Itens Menu-->
                        <input id="Signup" type="submit" hidden="value" name="view" value="signup"/><label for="Signup"><?php echo $this->language->signup?></label>
                    </form><br>
                    <!--Signup Screen-->
                    <form method="post">
                        <label for="Nickname"><?php echo $this->language->nickname ?></label>
                        <input id="Nickname" type="text" name="nickname" placeholder=<?php echo $this->language->nickname ?>><br>
                        <label for="Password"><?php echo $this->language->password ?></label>
                        <input id="Password" type="text" name="password" placeholder=<?php echo $this->language->password ?>><br>
                        <label for="Email"><?php echo $this->language->email ?></label>
                        <input id="Email" type="text" name="email" placeholder=<?php echo $this->language->email ?>><br>
                        <label for="Born"><?php echo $this->language->born ?></label>
                        <input id="Born" type="text" name="born" placeholder=<?php echo $this->language->born ?>><br>
                        <input type="hidden" name="view" value="signup">
                        <input type="submit" value="<?php echo $this->language->submit ?>">
                    </form>