<?php
require_once("header.php");
echo '<a href="strife.php">Back to strife page</a></br>';
echo 'Each "round" of combat represents an extended period of fighting. You may choose an active action and a passive action every round: these reflect the method by which you will be fighting that round.</br></br>';
echo 'The active commands are listed in order of attacking power: Aggrieve is the weakest and Assault the strongest, but using Assault lowers your defenses considerably. The passive commands are the opposite: The further down the list a passive command is, the more defensively-minded the action.</br></br>';
echo 'Each strife command has a number next to it. This is the bonus or penalty that your current equipment gives to that command. Bear this in mind when choosing your strategy!</br</br>';
echo 'Facing multiple enemies increases the power of the enemies later in the combat list: each successive enemy you engage with in the same round will have more and more of a boost. With this in mind, it is generally a good idea to put the most powerful enemies in an encounter at the top of the list, with the imps at the bottom.</br></br>';
echo 'Speaking of power, the enemies and enemy materials are arranged in order of toughness. The weakest enemy will be the imp of the first type in the drop-down menu, for instance. Tougher enemies drop more grist, and many also drop grist from one or two tiers higher than themselves, so experiment to see where you can get your spoils from!</br></br>';
echo 'Many weapons have a bonus to a specific combat action, and some even have penalties. These increase or decrease how well the action does what it does: An Assualt bonus, for instance, increases your attack power when using Assault, but does NOT decrease the defense penalty from the action. IMPORTANT NOTE - Abuse is NOT a defensive action, and bonuses to the Abuse action will NOT help you defend.</br></br>';
echo "Your base power is equal to the combined power of your weapons plus your Sprite's power plus your Echeladder height. Your sprite receives a power of double the amount of power you assigned to the prototypings (so if you prototyped a power 3 item and a power 4 item, your sprite would have a power of 14)</br></br>";
echo "Your base power can also be increased by having a power boost; this is a temporary state and will disappear the next time you succeed at strife, are defeated, or abscond from strife. You will not lose a power boost after assisting, but the boost will not help you assist either.</br></br>";
echo "Assisting adds your power (both base and your various command bonuses and penalties) to the main combatant's power and command bonuses/penalties as long as you remain assisting. It also allows assisting players to use combat consumables to influence the combat (The Barbasol Bomb, for instance)</br></br>";
echo 'It is possible to use one consumable item OR aspect pattern or ability per round. Choose wisely! Fraymotifs are much simpler to use, and so you can throw down as many tunes as you like each turn.';
require_once("footer.php");
?>