<?php include "../templates/top.php"?>
<html>
   <head>
      <title>
         Web page for testing
      </title>
   </head>
   <p>Elements to be found are on this page and I hope self-explanatory</p>
   <form>
      Find Element By Id <input class="addBorder" type="text" size="35" id="FindMeById"/><br>
      Find Element By name: <input class="addBorder" type="text" size="35" name="FindMeByName"/>
   </form>
   <br/>
   <div class="findMeByClassName addBorder" onclick="myFunction()">
      Find me By.className and click me to be surpised
      <h4 id="demo" style="color:#FFFFFF"> You have found me using By.className </h4>
      <script>
         function myFunction() {
         document.getElementById("demo").style.color = "#3333CC";
         }
      </script>
   </div>
   </br>
   <div><a class="addBorder" href="landinglinkandback.php">FindMeByLinkText</a> This links to a test page </div>
   <br/>
   <div><a class="addBorder" href="landinglinkandback.php">FindMeByPartialLinkText</a> This links to a test page, again </div>
   <br/>
   <div class="addBorder" id="findMeByCssSelector"> Find me by Css Selector </div>
   <br/>
   <div id="maincontainer">

      Because Css Selectors are a lot, see <a href="http://www.w3schools.com/cssref/css_selectors.asp"> here in the W3schools website </a>
      I am going to add a list, check boxes and radio buttons that are the most likely elements you'll find on a web page <br/>
      <div id="leftcolumn">
         <ul>
            <li>Item 1</li>
            <ul>
            <li>Sub Item 1.1</li>
                    <ol>
                        <li>Sub Sub Item 1.1</li>
                        <li>Sub Sub Item 1.2</li>
                    </ol>
            <li>Sub Item 1.2</li>
            <li>Sub Item 1.3</li>
            </ul>
            <li>
               Item 2
         </li>
            <ul>
                <li>Sub Item 2.1</li>
                <li>Sub Item 2.3</li>
            </ul>
            <li>Item 3</li>
         </ul>
      </div>
      <!--left-->
      <div id="contentwrapper"> 
          <textarea id="rightColumnText">
          </textarea>
      </div>
      <!-- right-->
      </div> <!--maincontainer-->
      
      <div>
         I am going to use XPath in the second example for check boxes and I am going 
         to use only XPath for selecting a radio button. I think that XPath will deserve a better coverage than that, but for now             	it is going to be OK like that.
         <br/>
         <div class="addBorder">
            Check box: 
            <form>
               <input type="checkbox" id="chooseMe" value="HappyTesting"> Choose me using xPath <br/>
               <input type="checkbox" id="notMe" value="IAmNotChosen"> I am lazy and unselected <br/>
            </form>
         </div>
         <div class="addBorder">
            Radio buttons: 
            <form>	
               <input type="radio" name="dontpickMe" value="unHappyTesting"> I don't like to test<br/>
               <input type="radio" name="pickMe" value="HappyTesting">  I like to TEST <br/>
            </form>
         </div>
      </div>
      
</html>