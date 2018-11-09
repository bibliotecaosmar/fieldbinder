<!--Content Itens Menu-->
                        <li name="view" value="index"><?php echo $this->index ?></li>
                        <li name="view" value="plant"><?php echo $this->plant ?></li>
                        <li name="view" value="animal"><?php echo $this->animal ?></li>
                        <li name="view" value="insect"><?php echo $this->insect ?></li>
                        <li name="view" value="mushroom"><?php echo $this->mushroom ?></li>
                        <li id="tabOn" name="view" value="signin"><?php echo $this->signin ?></li>
                    </ul>
                    <div>
                        <!--Sidebar Dropdown Menu-->
                        <h2>
                    <!--Screen Login-->
                    <div>
                        <!--username and password field-->
                        <form method="post">
                            <label for="user">User:</label>
                            <input type="text" name="user" placeholder="user">
                            <label for="password"></label>
                            <input type="text" name="password" placeholder="password">
                        </form>
                    </div>