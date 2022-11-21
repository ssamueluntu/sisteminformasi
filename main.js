  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
      const toggleBacktotop = () => {
          if (window.scrollY > 100) {
              backtotop.classList.add('active')
          } else {
              backtotop.classList.remove('active')
          }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
  }

  // Fungsi autentikasi for login file index
  function validate() {
      let username = document.getElementById("username").value;
      let password = document.getElementById("password").value;

      if (username == "") {
          alert("Username harus di isi")
      } else {
          if (password == "samuel" || password == "Samuel") {
              this.location.href = "index.html";
          } else if (password == "Aulya" || password == "aulya") {
              this.location.href = "index.html";
          } else if (password == "Holly" || password == "holly") {
              this.location.href = "index.html";
          } else if (password == "Marselino" || password == "marselino") {
              this.location.href = "index.html"
          } else if (password == null || password == "") {
              alert("password belum di isi");
          } else {
              alert("Password salah");
          }
      }
  };