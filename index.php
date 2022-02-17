<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/common/css/style.css" />
    <link rel="stylesheet" href="assets/libs/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" type="image/jpg" href="assets/common/img/logo.svg" />
    <title>Foo Fighters - Home</title>
  </head>
  <body>
    <?php include("navbar.php"); ?>
    <header id="main-presentation" class="presentation">
      <h1>Foo Fighters</h1>
    </header>
    <section id="members">
        <h1>Members</h1>
        <div>
          <div class="member">
            <img src="assets/common/img/members/1-min.jpg" alt="" />
            <h3>Dave Grohl</h3>
            <h4>Guitar</h4>
          </div>
          <div class="member">
            <img src="assets/common/img/members/2-min.jpg" alt="" />
            <h3>Rami Jaffee</h3>
            <h4>Organ</h4>
          </div>
          <div class="member">
            <img src="assets/common/img/members/3-min.jpg" alt="" />
            <h3>Taylor Hawkins</h3>
            <h4>Accoustic Drum Kit</h4>
          </div>
          <div class="member">
            <img src="assets/common/img/members/4-min.jpg" alt="" />
            <h3>Nate Mendel</h3>
            <h4>Bass Guitar</h4>
          </div>
          <div class="member">
            <img src="assets/common/img/members/5-min.jpg" alt="" />
            <h3>Pat Smear</h3>
            <h4>Rhythm Guitar</h4>
          </div>
          <div class="member">
            <img src="assets/common/img/members/6-min.jpg" alt="" />
            <h3>William Goldsmith</h3>
            <h4>Acoustic Drum Kit</h4>
          </div>
          <div class="member">
            <img src="assets/common/img/members/7-min.jpg" alt="" />
            <h3>Christ Shiflett</h3>
            <h4>Lead Guitar</h4>
          </div>
          <div class="member">
            <img src="assets/common/img/members/8-min.jpg" alt="" />
            <h3>Franz Stahl</h3>
            <h4>Lead Guitar</h4>
          </div>
        </div>
      </section>
      <section id="infos">
        <div class="text">
          <p>
            Foo Fighters is an American rock band formed in Seattle, Washington, in 1994. It was
            founded by former Nirvana drummer Dave Grohl as a one-man project following the
            dissolution of Nirvana after the suicide of Kurt Cobain. The group took its name from
            "Foo fighter", a nickname coined by Allied aircraft pilots for UFOs and other aerial
            phenomena. Over the course of their career, Foo Fighters have won 12 Grammy Awards,
            including Best Rock Album four times.[3] The band has also won an American Music Award,
            four Brit Awards, and two MTV Video Music Awards. As of 2015, Foo Fighters have sold
            over 12 million albums in the U.S.
          </p>
        </div>
        <img src="./assets/common/img/dave.jpg" alt="" />
      </section>
      <section id="tour-dates">
        <div class="table">
          <h2>Tour Dates</h2>
          <table>
            <tr>
              <td>07/29/21</td>
              <td>
                LOLLAPALOOZA<br />
                CHICAGO, US
              </td>
              <td><a href="#modal" rel="modal:open">Tickets</a></td>
            </tr>
            <tr>
              <td>09/03/21</td>
              <td>
                BONNAROO MUSIC + ARTS FESTIVAL<br />
                MANCHESTER, TN
              </td>
              <td><a href="#modal" rel="modal:open">Tickets</a></td>
            </tr>
            <tr>
              <td>09/05/21</td>
              <td>
                BOTTLEROCK NAPA VALLEY<br />
                NAPA, US
              </td>
              <td><a href="#modal" rel="modal:open">Tickets</a></td>
            </tr>
            <tr>
              <td>05/27/22</td>
              <td>
                BOSTON CALLING MUSIC FESTIVAL<br />
                BOSTON, US
              </td>
              <td><a href="#modal" rel="modal:open">Tickets</a></td>
            </tr>
            <tr>
              <td>06/08/22</td>
              <td>
                FLUGHAFEN TEMPELHOF<br />
                BERLIN, DE
              </td>
              <td><a href="#modal" rel="modal:open">Tickets</a></td>
            </tr>
            <tr>
              <td>06/10/22</td>
              <td>
                NOVA ROCK FESTIVAL<br />
                NICKELSDORF, AT
              </td>
              <td><a href="#modal" rel="modal:open">Tickets</a></td>
            </tr>
            <tr>
              <td>06/12/22</td>
              <td>
                I-DAYS<br />
                MILAN, IT
              </td>
              <td><a href="#modal" rel="modal:open">Tickets</a></td>
            </tr>
            <tr>
              <td>06/16/22</td>
              <td>
                CIUDAD DE LAS ARTES Y<br />
                LAS CIENCIAS VALENCIA, ES
              </td>
              <td><a href="#modal" rel="modal:open">Tickets</a></td>
            </tr>
            <tr>
              <td>06/18/22</td>
              <td>
                ROCK IN RIO LISBON<br />
                LISBON, PT
              </td>
              <td><a href="#modal" rel="modal:open">Tickets</a></td>
            </tr>
            <tr>
              <td>06/23/22</td>
              <td>
                FESTIVAL DE NIMES<br />
                NIMES, FR
              </td>
              <td><a href="#modal" rel="modal:open">Tickets</a></td>
            </tr>
            <tr>
              <td>06/23/22</td>
              <td>
                FESTIVAL DE NIMES<br />
                NIMES, FR
              </td>
              <td><a href="#modal" rel="modal:open">Tickets</a></td>
            </tr>
          </table>
        </div>
      </section>
    </main>
    <div id="modal" class="modal">
      <p>Not Available at the moment.</p>
    </div>
    <?php include("footer.php") ?>
  </body>
  <!-- JQuery -->
  <script type="text/javascript" src="./assets/libs/jquery/jquery.min.js"></script>
  <!-- jQuery Modal -->
  <script src="./assets/libs/jquery/plugins/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="./assets/libs/jquery/plugins/jquery.modal.min.css" />
</html>
