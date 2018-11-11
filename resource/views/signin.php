<!--Content Itens Menu-->
                        <input id="Signin" type="submit" hidden="value" name="view" value="signin"/><label for="Signin"><?php echo $this->language->signin ?></label>
                    </form><br>
                    <!--Screen Login-->
                    <div>
                        <!--username and password field-->
                        <form method="post">
                            <label for="User"><?php echo $this->language->email ?>:</label>
                            <input id="User"type="text" name="user" placeholder="<?php echo $this->language->email ?>">
                            <label for="Password"><?php echo $this->language->password ?>:</label>
                            <input id="Password" type="text" name="password" placeholder="<?php echo $this->language->password ?>">
                            <input type="submit" name="view" value="<?php echo $this->language->signin ?>">
                        </form>
                    </div>