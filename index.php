<?php
$title = 'IT Multiservice Busch';
$descr = "ITMB - Software development, System Engineering, Automation and peaceful hacks.";
# mail('mailinglist23@gizmore.org', '', 'NEW BUSCHFUNK VISITOR!', "A new player joined: <?=$_SERVER['REMOTE_ADDR']? >"); SOMEONE SAYS THIS IS FORBIDDEN -.-
?>

<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title?></title>

  <meta property="og:title" content="<?=$title?>">
  <meta property="og:description" content="<?=$descr?>">
  <meta property="og:image" content="https://buschtalk.tv/itmb-logo.png?v=1">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:url" content="https://buschfunk.tv/">
  <meta property="og:type" content="website">

  <link rel="stylesheet" href="css.css" />

</head>
<body>

  <header>
    <div class="hero">
      <img class="photo" src="itmb-logo.png" alt="ITMB Logo">
      <h1>ITMB</h1>
      <p class="subtitle"><?=$descr?></p>
    </div>
  </header>

  <section>
    <div class="card">
      <h2>Programmiersprachen</h2>
      <div class="langs">
        <span class="lang">Python</span>
        <span class="lang">PHP</span>
        <span class="lang">JavaScript</span>
        <span class="lang">Java</span>
        <span class="lang">Ruby</span>
        <span class="lang">C</span>
      </div>
    </div>
  </section>

  <section>
    <div class="card">
      <h2>Kontakt</h2>
      <p>
        <ul>
            <li>E-Mail: <a href="mailto:gizmore@wechall.net">E-Mail</a></li>
            <li>WhatsApp: 0049 176 59 59 88 44</li>
            <li>Telegram: <a href="https://t.me/wc_gizmore">t.me/wc_gizmore</a></li>
            <li>IRC: <a href="ircs://irc.wechall.net:6697">#wechall</a></li>
            <li>LAN IRC: <a href="irc://192.168.2.4x:6667">#bauhof15</a></li>
        </ul>
      </p>
    </div>
  </section>

  <section id="system-check">
    <div class="card">
      <h2>System Check</h2>
      <p>Optionaler Kompatibilitätscheck für Besucher.</p>

      <form id="osForm">
        <label>
          Betriebssystem
          <select id="os" required>
            <option value="">Bitte wählen</option>
            <option>BSD</option>
            <option>Linux (GNU)</option>
            <option>Plan9</option>
            <option>Unix</option>
            <option>MorphOS</option>
            <option>ReactOS</option>
            <option>Other</option>
            <option selected>Windows</option>
            <option>macOS</option>
          </select>
        </label>

        <label>
          Windows / Linux Theme oder Window Manager
          <input id="theme" placeholder="z.B. Dark Mode, KDE, GNOME, i3, Hyprland">
        </label>

        <button type="submit">Check starten</button>
      </form>
    </div>
  </section>

  <footer>
    © 2026 chappy and gizmore
  </footer>

  <div class="overlay" id="pwnedOverlay">
    <div class="popup">
      <h2>You could have been pwned!</h2>
      <p style="display: flex; flex-direction: column;">
        <div>
            <a href="https://www.wechall.net/profile/gizmore"><img src="gizmore.png" alt="Image of an mogwai, aka gizmore."></a>
        </div>
        <div>
        Keine Sorge. Das ist nur ein harmloser Demo-Hinweis.
        Trotzdem: niemals fremden Links vertrauen! :)
        </div>
      </p>
      <button class="close" onclick="closePwned()">Schließen</button>
    </div>
  </div>

  <div class="overlay" id="calcOverlay">
    <div class="calculator-window">
      <div class="calc-titlebar">
        <span>Calculator</span>
        <span class="calc-close" onclick="closeCalculator()">×</span>
      </div>

      <div class="calc-display" id="calcDisplay">0</div>

      <div class="calc-grid">
        <div class="calc-key op">%</div>
        <div class="calc-key op">CE</div>
        <div class="calc-key op">C</div>
        <div class="calc-key op">⌫</div>

        <div class="calc-key">7</div>
        <div class="calc-key">8</div>
        <div class="calc-key">9</div>
        <div class="calc-key op">÷</div>

        <div class="calc-key">4</div>
        <div class="calc-key">5</div>
        <div class="calc-key">6</div>
        <div class="calc-key op">×</div>

        <div class="calc-key">1</div>
        <div class="calc-key">2</div>
        <div class="calc-key">3</div>
        <div class="calc-key op">−</div>

        <div class="calc-key">0</div>
        <div class="calc-key">.</div>
        <div class="calc-key op">=</div>
        <div class="calc-key op">+</div>
      </div>
    </div>
  </div>

  <script>
    let pwnedShown = false;

    window.addEventListener("scroll", () => {
      const trigger = document.querySelector("#system-check");
      const rect = trigger.getBoundingClientRect();

      if (!pwnedShown && rect.top < window.innerHeight * 0.75) {
        pwnedShown = true;
        document.querySelector("#pwnedOverlay").style.display = "flex";
      }
    });

    function closePwned() {
      document.querySelector("#pwnedOverlay").style.display = "none";
    }

    function closeCalculator() {
      document.querySelector("#calcOverlay").style.display = "none";
    }

    document.querySelector("#osForm").addEventListener("submit", (event) => {
      event.preventDefault();

      const os = document.querySelector("#os").value;
      const theme = document.querySelector("#theme").value;

      document.querySelector("#calcDisplay").textContent = os === "Windows"
        ? "calc.exe"
        : theme || "1337";

      document.querySelector("#calcOverlay").style.display = "flex";
    });
  </script>

</body>
</html>
