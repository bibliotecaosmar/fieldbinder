<!--Content Itens Menu-->
                        <li method="post" name="view" value="index"><?php echo $this->index ?></li>
                        <li method="post" name="view" value="plant"><?php echo $this->plant ?></li>
                        <li method="post" name="view" value="animal"><?php echo $this->animal ?></li>
                        <li method="post" name="view" value="insect"><?php echo $this->insect ?></li>
                        <li method="post" name="view" value="mushroom"><?php echo $this->mushroom ?></li>
                        <li id="tabOn" method="post" name="view" value="signin"><<?php echo $this->signin ?>/li>
                    </ul>
                    <div>
                        <!--Sidebar Dropdown Menu-->
                        <h2>
                    <!--Screen Login-->
                    <div>
                        <!--username and password field-->
                        <form name="sign">
                            <label for="user">User:</label>
                            <input type="text" name="user" placeholder="user">
                            <label for="password"></label>
                            <input type="text" name="password" placeholder="password">
                        </form>
                    </div>