<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin page</title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="css/main.css">


  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>
<body>

<div id="app">

<nav id="navbar-main" class="navbar is-fixed-top">
  <div class="navbar-brand">
    <a class="navbar-item mobile-aside-button">
      <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
    </a>
  </div>
  <div class="navbar-brand is-right">
    <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
      <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
    </a>
  </div>
  <div class="navbar-menu" id="navbar-menu">
    <div class="navbar-end">
      <div class="navbar-item dropdown has-divider has-user-avatar">
        <a class="navbar-link">
          <div class="user-avatar">
            <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
          </div>
          <div class="is-user-name"><span>{{ auth()->user()->username }}</span></div>
          <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
        </a>
        <div class="navbar-dropdown">
          <a href="profile.html" class="navbar-item">
            <span class="icon"><i class="mdi mdi-account"></i></span>
            <span>My Profile</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-settings"></i></span>
            <span>Settings</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-email"></i></span>
            <span>Messages</span>
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>Log Out</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    <div>
      <b class="font-black"></b>GMF X Unpad</b>
    </div>
  </div>
  <div class="menu is-menu-main">
    <p class="menu-label">General</p>
    <ul class="menu-list">
      <li class="--set-active-index-html">
        <a href="index.html">
          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>
    </ul>
    <p class="menu-label">Examples</p>
    <ul class="menu-list">
      <li class="active">
        <a href="tables.html">
          <span class="icon"><i class="mdi mdi-table"></i></span>
          <span class="menu-item-label">Tables</span>
        </a>
      </li>
      <li class="--set-active-forms-html">
        <a href="forms.html">
          <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
          <span class="menu-item-label">Forms</span>
        </a>
      </li>
      <li class="--set-active-profile-html">
        <a href="profile.html">
          <span class="icon"><i class="mdi mdi-account-circle"></i></span>
          <span class="menu-item-label">Profile</span>
        </a>
      </li>
      <li>
        <a href="login.html">
          <span class="icon"><i class="mdi mdi-lock"></i></span>
          <span class="menu-item-label">Login</span>
        </a>
      </li>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-view-list"></i></span>
          <span class="menu-item-label">Submenus</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="#void">
              <span>Sub-item One</span>
            </a>
          </li>
          <li>
            <a href="#void">
              <span>Sub-item Two</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
    <p class="menu-label">About</p>
    <ul class="menu-list">
      <li>
        <a href="#" class="has-icon">
          <span class="icon"><i class="mdi mdi-help-circle"></i></span>
          <span class="menu-item-label">About</span>
        </a>
      </li>
      <li>
        <a href="#" class="has-icon">
          <span class="icon"><i class="mdi mdi-github-circle"></i></span>
          <span class="menu-item-label">GitHub</span>
        </a>
      </li>
    </ul>
  </div>
</aside>


<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h2 class="title">
      Admin Page
    </h2>
  </div>
</section>

  <section class="section main-section">
    <div class="notification blue">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
        <div>
          <span class="icon"><i class="mdi mdi-buffer"></i></span>
          <b>Responsive table</b>
        </div>
        <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
      </div>
    </div>
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Clients
        </p>
        <a href="#" class="card-header-icon">
          <button class="button small green --jb-modal" data-target="data-form-clien" type="button">
            <span class="icon"><i class="mdi  mdi-plus"></i></span>
          </button>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            <th class="number-cell">
              <label class="checkbox">
                <span>No.</span>
              </label>
            </th>
            <th class="image-cell"></th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Division</th>
            <th>Role</th>
            <th>Created</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td class="sample-number">
                <span>1.</span>
            </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Rebecca Bauch</td>
            <td data-label="Email">Rebecca.Bauch@gmail.com</td>
            <td data-label="Division">TL-01</td>
            <td data-label="Role">Admin</td>
            <td data-label="Created">
              <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>2.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/felicita-yundt.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Felicita Yundt</td>
            <td data-label="Email">Felicita.Yundt@gmail.com</td>
            <td data-label="Division">TL-01</td>
            <td data-label="Role"> Editor  </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Jan 8, 2021">Jan 8, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>3.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/mr-larry-satterfield-v.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Mr. Larry Satterfield V</td>
            <td data-label="Email">Larry.Satterfield@gmail.com</td>
            <td data-label="Division">TN-01</td>
            <td data-label="Role"> Editor </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Dec 18, 2021">Dec 18, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>4.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/mr-broderick-kub.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Mr. Broderick Kub</td>
            <td data-label="Email">Broderick.Kub@gmail.com</td>
            <td data-label="Division">TE-02</td>
            <td data-label="Role"> Editor</td>
            <td data-label="Created">
              <small class="text-gray-500" title="Sep 13, 2021">Sep 13, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>5.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/barry-weber.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Barry Weber</td>
            <td data-label="Email">Barry.Weber@gmail.com</td>
            <td data-label="Division">TN-02</td>
            <td data-label="Role"> Editor</td>
            <td data-label="Created">
              <small class="text-gray-500" title="Jul 24, 2021">Jul 24, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>6.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/bert-kautzer-md.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Bert Kautzer MD</td>
            <td data-label="Email">Bert.Kautzer@gmail.com</td>
            <td data-label="Division">TE-01</td>
            <td data-label="Role"> Editor </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Mar 30, 2021">Mar 30, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>7.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/lonzo-steuber.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Lonzo Steuber</td>
            <td data-label="Email">Lonzo.Steuber@gmail.com</td>
            <td data-label="Division">Visitor</td>
            <td data-label="Role">Viewer</td>
            <td data-label="Created">
              <small class="text-gray-500" title="Feb 12, 2021">Feb 12, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>8.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/jonathon-hahn.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Jonathon Hahn</td>
            <td data-label="email">Jonathon.Hahn@gmail.com</td>
            <td data-label="Division">Visitor</td>
            <td data-label="Role">Viewer</td>
            <td data-label="Created">
              <small class="text-gray-500" title="Dec 30, 2021">Dec 30, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>9.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/ryley-wuckert.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Ryley Wuckert</td>
            <td data-label="Email">Ryley.Wuckert@gmail.com</td>
            <td data-label="Division">Visitor</td>
            <td data-label="Role">Viewer</td>
            <td data-label="Created">
              <small class="text-gray-500" title="Jun 28, 2021">Jun 28, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>10.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/sienna-hayes.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Sienna Hayes</td>
            <td data-label="Email">Conn, Jerde and Douglas</td>
            <td data-label="Division">Visitor</td>
            <td data-label="Role">Viewer</td>
            <td data-label="Created">
              <small class="text-gray-500" title="Mar 7, 2021">Mar 7, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          </tbody>
        </table>

        <div class="table-pagination">
          <div class="flex items-center justify-between">
            <div class="buttons">
              <button type="button" class="button active">1</button>
              <button type="button" class="button">2</button>
              <button type="button" class="button">3</button>
            </div>
            <small>Page 1 of 3</small>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="section main-section">
    <div class="notification red">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
        <div>
          <span class="icon"><i class="mdi mdi-buffer"></i></span>
          <b>Empty table.</b>
        </div>
        <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
      </div>
    </div>

    <div class="card empty">
      <div class="card-content">
        <div>
          <span class="icon large"><i class="mdi mdi-emoticon-sad mdi-48px"></i></span>
        </div>
        <p>Nothing's here…</p>
      </div>
    </div>
  </section>

<footer class="footer">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
    <div class="flex items-center justify-start space-x-3">
      <div>
        © 2023, GMF AeroAsia x Unpad
      </div>
    </div>
  </div>
</footer>

<div id="modal-edit" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Form New Client</p>
    </header>
  
    <section class="modal-card-body">
        <form method="get">
          <div class="field">
              <label class="label">Name</label>
              <div class="control icons-left">
                <input class="input" type="text" placeholder="Name">
                <span class="icon left"><i class="mdi mdi-account"></i></span>
              </div>
          </div>

          <div class="field">
            <label class="label">E-mail</label>
            <div class="control icons-left">
              <input class="input" type="text" placeholder="E-mail">
              <span class="icon left"><i class="mdi mdi-email-outline"></i></span>
            </div>
          </div>

        <div class="field">
          <label class="label">Division</label>
          <div class="control icons-left">
            <input class="input" type="text" placeholder="Division">
            <span class="icon left"><i class="mdi mdi-account-multiple"></i></span>
          </div>
        </div>

        <div class="field">
          <label class="label">Password</label>
          <div class="control icons-left">
            <input class="input" type="text" placeholder="Password">
            <span class="icon left"><i class="mdi mdi-lock"></i></span>
          </div>
        </div>

          <div class="field">
            <label class="label">Role</label>
            <div class="control">
              <div class="select">
                <select name="Role" required>
                  <option value="" disabled selected hidden>Role</option>
                  <option value="coffee">Admin</option>
                  <option value="coffee">Editor</option>
                  <option value="coffee">Viewer</option>
                </select>
            </div>
            </div>
          </div>
          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green">
                Submit
              </button>
            </div>
            <div class="control">
              <button type="reset" class="button red">
                Reset
              </button>
            </div>
          </div>
        </form>
    </section>
  </div>
</div>
</div>
</div>

<div id="modal-delete" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title text-yelow-500">Warning</p>
    </header>
    <section class="modal-card-body">
      <p>The client's account will be deleted, and cannot be restored?</p>
      
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button blue --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

<div id="data-form-clien" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Form New Client</p>
    </header>
  
    <section class="modal-card-body">
        <form method="get">
          <div class="field">
              <label class="label">Name</label>
              <div class="control icons-left">
                <input class="input" type="text" placeholder="Name">
                <span class="icon left"><i class="mdi mdi-account"></i></span>
              </div>
          </div>

          <div class="field">
            <label class="label">E-mail</label>
            <div class="control icons-left">
              <input class="input" type="text" placeholder="E-mail">
              <span class="icon left"><i class="mdi mdi-email-outline"></i></span>
            </div>
          </div>

        <div class="field">
          <label class="label">Division</label>
          <div class="control icons-left">
            <input class="input" type="text" placeholder="Division">
            <span class="icon left"><i class="mdi mdi-account-multiple"></i></span>
          </div>
        </div>

        <div class="field">
          <label class="label">Password</label>
          <div class="control icons-left">
            <input class="input" type="text" placeholder="Password">
            <span class="icon left"><i class="mdi mdi-lock"></i></span>
          </div>
        </div>

          <div class="field">
            <label class="label">Role</label>
            <div class="control">
              <div class="select">
                <select name="Role" required>
                  <option value="" disabled selected hidden>Role</option>
                  <option value="coffee">Admin</option>
                  <option value="coffee">Editor</option>
                  <option value="coffee">Viewer</option>
                </select>
            </div>
            </div>
          </div>
          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green">
                Submit
              </button>
            </div>
            <div class="control">
              <button type="reset" class="button red">
                Reset
              </button>
            </div>
          </div>
        </form>
    </section>
  </div>
</div>
</div>
</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js?v=1652870200386"></script>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
