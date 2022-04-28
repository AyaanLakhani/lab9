<!DOCTYPE html>
<html>
    <title>Marvel Quiz</title>
     <body>
       <h1>Welcome to the Marvel Quiz</h1>
       <form action="quizScore.php" method="POST">
           <h2>Who is the strongest there is?</h2>
           <input type="radio" id="SW" name="Marvel1" value="Scarlet Witch">
           <label for="Sw">Scarlet Witch</label><br>
           <input type="radio" id="TH" name="Marvel1" value="Thor">
           <label for="Th">Thor</label><br>
           <input type="radio" id="HK" name="Marvel1" value="Hulk">
           <label for="Hk">Hulk</label><br>
           <input type="radio" id="CM" name="Marvel1" value="Captain Marvel">
           <label for="Sw">Captain Marvel</label>
           <h3>What does Thanos collect?</h3>
           <input type="radio" id="IS" name="Marvel2" value="Infinity Stones">
           <label for="Is">Infinity Stones</label><br>
           <input type="radio" id="PT" name="Marvel2" value="Planets">
           <label for="Pt">Planets</label><br>
           <input type="radio" id="LV" name="Marvel2" value="Lives">
           <label for="Lv">Lives</label><br>
           <input type="radio" id="HS" name="Marvel2" value="Hearts">
           <label for="Hs">Hearts</label>
           <h4>Which Symbiote is a serial killer?</h4>
           <input type="radio" id="TN" name="Marvel3" value="Toxin">
           <label for="Tn">Toxin</label><br>
           <input type="radio" id="VN" name="Marvel3" value="Venom">
           <label for="Vn">Venom</label><br>
           <input type="radio" id="RT" name="Marvel3" value="Riot">
           <label for="Hk">Riot</label><br>
           <input type="radio" id="CN" name="Marvel3" value="Carnage">
           <label for="Sw">Carnage</label>
           <h5>What Organization did Red Skull Run?</h5>
           <input type="radio" id="AM" name="Marvel4" value="Aim">
           <label for="Am">AIM</label><br>
           <input type="radio" id="SH" name="Marvel4" value="Shield">
           <label for="Sh">Shield</label><br>
           <input type="radio" id="HA" name="Marvel4" value="Hydra">
           <label for="Ha">Hydra</label><br>
           <input type="radio" id="CB" name="Marvel4" value="Cabal">
           <label for="Cb">Cabal</label>
           <h6>How many rings does Shang-Chi Have?</h6>
           <input type="radio" id="R5" name="Marvel5" value="5 Rings">
           <label for="r5">5 Rings</label><br>
           <input type="radio" id="R10" name="Marvel5" value="10 Rings">
           <label for="r10">10 Rings</label><br>
           <input type="radio" id="None" name="Marvel5" value="0 Rings">
           <label for="none">0 Rings</label><br>
           <input type="radio" id="R1" name="Marvel5" value="1 Ring">
           <label for="r1">1 Ring</label><br>
           <br>
           <input type="submit" value="Submit">
       </form>
       <style>
           h2,h3,h4,h5,h6{
               font-size: 20px;
           }
       </style>
     </body>
</html>