<!--Content Itens Menu-->
                            <li><?php echo $this->index ?></li>
                            <li><?php echo $this->plant ?></li>
                            <li><?php echo $this->animal ?></li>
                            <li><?php echo $this->insect ?></li>
                            <li><?php echo $this->mushroom ?></li>
                            <li id="tabOn"><?php echo $this->signup?></li>
                        </ul>
                        <div>
                            <!--Sidebar Dropdown Menu-->
                            <h2></h2>
                        <!--Signup Screen-->
                        <form>
                            <label for="nickname"><?php echo $this->nickname ?></label>
                            <input type="text" name="nickname" placeholder=<?php echo $this->nickname ?>>
                            <label for="password"><?php echo $this->password ?></label>
                            <input type="text" name="password" placeholder=<?php echo $this->password ?>>
                            <label for="email"><?php echo $this->email ?></label>
                            <input type="text" name="email" placeholder=<?php echo $this->email ?>>
                            <label for="born"><?php echo $this->born ?></label>
                            <input type="text" name="born" placeholder=<?php echo $this->born ?>>
                        </form>