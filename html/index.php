<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Webpage-11</title>
  </head>

  <body>
    <div id="top">
      <!-- text formatting -->
      <strong>Strong Text</strong> <br />
      <em>Italic Text</em> <br />
      <u>Underlined text</u>
      <p>This is a <sup>superscript</sup></p>
      <p>This is a <sub>subscript</sub></p>
      <del>This is a strikethrough</del>
      <hr />
    </div>

    <div>
      <!-- Unordered list -->
      <p>This is my unordered list</p>

      <ul>
        <li>First item</li>
        <li>Second Item</li>
      </ul>

      <hr />

      <!-- Ordered list -->
      <p>This is my ordered list</p>

      <ol type="1">
        <li>First item</li>
        <li>Second Item</li>
      </ol>

      <hr />
    </div>
    <div>
      <p>Our computers are the <strong>BEST</strong> on the market</p>

      <!-- Input images -->
      <img src="techo.jpeg" width="300" height="300" />

      <!-- hotlinking image directly with the image address -->
      <img
        src="https://cdn.britannica.com/77/170477-050-1C747EE3/Laptop-computer.jpg"
        width="350"
      />

      <hr />
    </div>

    <div>
      <!-- forms -->
      <h3>Let's use some forms</h3>

      <form>
        <p>Username: <input type="text" value="enter username" /></p>
        <p>Save Username <input type="checkbox" checked /></p>
        <!--checked = have it checked by default-->
        <br />

        <!-- Choose buttons -->
        <p>How old are you?</p>
        <p><em>Under 21 </em><input type="radio" name="age" /></p>
        <p><em>Over 21</em> <input type="radio" name="age" /></p>

        <br />

        <!-- Drop down menu -->
        <p>
          Favorite Food:

          <select>
            <option>Pizza</option>
            <option selected>Ice Cream</option>
            <!--first option that will be selected from DD menu-->
            <option>Sandwiches</option>
          </select>
        </p>

        <!-- submit buttons -->

        <input type="submit" value="Click Me" />
      </form>

      <hr />
    </div>

    <div>
      <!-- tables -->
      <h3>Let's do some tables</h3>

      <table id="tableOne">
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
        </tr>
        <tr>
          <td>John</td>
          <td>Smith</td>
        </tr>
        <tr>
          <td>Jane</td>
          <td>Monroe</td>
        </tr>
      </table>
      <br />

      <table>
        <tr>
          <th>System</th>
          <th>Games</th>
        </tr>
        <tr>
          <td>Xbox</td>
          <td>COD</td>
        </tr>
        <tr>
          <td>PlayStation</td>
          <td>FIFA</td>
        </tr>
      </table>
      <hr />
    </div>

    <!-- Links -->
    <div>
      <h3>Now for some links</h3>
      <p>
        <a href="https://www.google.com" target="_blank"> Go to Google here</a>
      </p>
      <p><a href="https:/www.youtube.com" target="_blank">Go to YT</a></p>
      <p>
        <a
          href="https://cdn.britannica.com/77/170477-050-1C747EE3/Laptop-computer.jpg"
          target="_blank"
          >See picutre of PC</a
        >
      </p>

      <p>
        <a href="https://www.google.com" target="_blank"
          ><img src="techo.jpeg" width="300"
        /></a>
      </p>
      <p><a href="homepage.html" target="_blank">Homepage</a></p>
      <hr />
    </div>

    <!-- html entities -->

    <div>
      &copy;Eleazar <br />
      
      
    </div>

    <!-- iframe -->
    <iframe src="homepage.html"></iframe>

    <div>
      <p><a href="#top">Back to Top</a></p>
      <p><a href="#tableOne">Jump To Table</a></p>
    </div>
  </body>
</html>
