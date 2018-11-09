<!--Content Itens Menu-->
                        <input id="Signin" type="submit" hidden="value" name="view" value="signin"/><label for="Signin"><?php echo $this->signin ?></label>
                    </form><br>
                    <div>
                        <!--Sidebar Dropdown Menu-->
                        <h2></h2>
                    <!--Screen Login-->
                    <div>
                        <!--username and password field-->
                        <form method="post">
                            <label for="User"><?php echo $this->email ?>:</label>
                            <input id="User"type="text" name="user" placeholder="user">
                            <label for="Password"><?php echo $this->password ?>:</label>
                            <input id="Password" type="text" name="password" placeholder="<?php echo $this->password ?>">
                            <input type="submit" value="<?php echo $this->signin ?>">
                        </form>
                    </div>