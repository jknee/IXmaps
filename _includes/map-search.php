<!-- SEARCH AREA -->
<section id="search-header">
<div class="content">

  <!-- Search Tabs -->
  <div class="ui top attached tabular menu">
    <a class="item" data-tab="quick">Quick</a>
    <a class="item active" data-tab="basic">Basic</a>
    <a class="item" data-tab="advanced">Advanced</a>

    <div class="map-help">
      <button class="ui transparent button">Help</button>
    </div>
  </div>

  <!-- Tab 1 Contents: Quick Search -->
  <div class="ui bottom attached tab segment content" data-tab="quick">
    <h3 class="ui header text-center">Select a quick search to view traceroutes in the IXmaps database.</h3>

    <div class="input-holder">
     <div class="quick-input">
        <button class="ui large fluid basic blue button">
        <i><img src="_assets/scl-icn-git.svg" alt=""></i><br>
        Last Contibuted</button>
      </div>
      <div class="quick-input">
        <button class="ui large fluid basic blue button">
        <i><img src="_assets/scl-icn-git.svg" alt=""></i><br>
        Via NSA City</button>
      </div>
      <div class="quick-input">
        <button class="ui large fluid basic blue button">
        <i><img src="_assets/scl-icn-git.svg" alt=""></i><br>
        Boomerangs</button>
      </div>
      <div class="quick-input">
        <button class="ui large fluid basic blue button">
        <i><img src="_assets/scl-icn-git.svg" alt=""></i><br>
        From My ISP</button>
      </div>
      <div class="quick-input">
        <button class="ui large fluid basic blue button">
        <i><img src="_assets/scl-icn-git.svg" alt=""></i><br>
        From My City</button>
      </div>
      <div class="quick-input">
        <button class="ui large fluid basic blue button">
        <i><img src="_assets/scl-icn-git.svg" alt=""></i><br>
        From My Country</button>
      </div>
    </div>

    <hr>

    <div class="searchsettings">
      <p class="minor">
        <strong>Search Query:&#8196;</strong>
        <span>Does Originate in AS number 814</span>
        <a href="#">&#8195;[ Refine in Advanced Search ]</a>
      </p>

      <button class="ui primary basic button">
        Settings
      </button>
    </div>

  </div>

 <!-- Tab 2 Contents: Basic Search -->
  <div class="ui bottom attached tab segment active content" data-tab="basic">
    <h3 class="ui header text-center">Enter Search Terms to Find Traceroutes in the IXmaps Database</h3>
    <div class="basic input-holder">

      <a class="from basic-srch-itm" data-position="bottom left">
        <div class="input-summary">
          <div class="label">From</div>
          <div>
            –––
            <i class="ui mini image right floated"><img src="#" alt="delete"></i>>
          </div>
        </div>
      </a>

      <a class="via basic-srch-itm" data-position="bottom left">
        <div class="input-summary">
          <div class="label">VIA</div>
          <div>
            –––
            <i class="ui mini image right floated"><img src="#" alt="delete"></i>>
          </div>
        </div>
      </a>

      <a class="to basic-srch-itm" data-position="bottom left">
        <div class="input-summary">
          <div class="label">TO</div>
          <div>
            –––
            <i class="ui mini image right floated"><img src="#" alt="delete"></i>>
          </div>
        </div>
      </a>

     <div class="basic-srch-itm">
      <button class="ui huge fluid red button">Search</button>
      </div>


      <div class="ui from flowing inverted popup hidden" data-variation="wide">
        <div class="ui inverted form">
          <div class="inline field">
            <label>Contibutor</label>
            <input type="text" placeholder="Contibutor">
          </div>
          <div class="inline field">
            <label>ISP</label>
            <input type="text" placeholder="ISP">
          </div>
          <div class="inline field">
            <label>City</label>
            <input type="text" placeholder="City">
          </div>
          <div class="inline field">
            <label>Country</label>
            <input type="text" placeholder="Country">
          </div>
        </div>
        <button class="ui primary blue right floated button">Save</button>
      </div>

      <div class="ui via flowing inverted popup hidden" data-variation="wide">
        <div class="ui inverted form">
          <div class="inline field">
            <label>NSA</label>
            <input type="text" placeholder="NSA">
          </div>
          <div class="inline field">
            <label>ISP</label>
            <input type="text" placeholder="ISP">
          </div>
          <div class="inline field">
            <label>City</label>
            <input type="text" placeholder="City">
          </div>
          <div class="inline field">
            <label>Country</label>
            <input type="text" placeholder="Country">
          </div>
        </div>
        <button class="ui primary blue right floated button">Save</button>
      </div>

      <div class="ui to flowing inverted popup hidden" data-variation="wide">
        <div class="ui inverted form">
          <div class="inline field">
            <label>Website</label>
            <input type="text" placeholder="Website">
          </div>
          <div class="inline field">
            <label>ISP</label>
            <input type="text" placeholder="ISP">
          </div>
          <div class="inline field">
            <label>City</label>
            <input type="text" placeholder="City">
          </div>
          <div class="inline field">
            <label>Country</label>
            <input type="text" placeholder="Country">
          </div>
        </div>
        <button class="ui primary blue right floated button">Save</button>
      </div>


    </div>
  </div>

  <!-- Tab 3 Contents: Advanced Search -->
  <div class="ui bottom attached tab segment" data-tab="advanced">
    <h3 class="ui header">Construct a custom query to search the IXmaps database</h3>
    <div class="advanced input-holder">
      <!-- Does Not -->
      <div class="advanced-input">
      <select class="ui fluid dropdown">
        <option value="1">Does Not</option>
        <option value="0">Does</option>
      </select>
      </div>

      <!-- Terminate -->
      <div class="advanced-input">
      <select class="ui fluid dropdown">
        <option value="1">Terminates In</option>
        <option value="0">Does</option>
      </select>
      </div>

      <!-- Destination -->
      <div class="advanced-input">
      <select class="ui fluid dropdown">
        <option value="1">Destination Hostname</option>
        <option value="0">Does</option>
      </select>
      </div>

      <!-- Input -->
      <div class="advanced-input">
      <div class="ui large fluid input">
        <input type="text" placeholder="Host Name">
      </div>
      </div>

      <!-- And -->
      <div class="advanced-input">
      <select class="ui fluid dropdown">
        <option value="1">And</option>
        <option value="0">Or</option>
      </select>
      </div>

      <!-- ADD -->
      <button class="circular ui icon button">
        <i class="icon settings"></i>
      </button>

      <!-- DELETE -->
      <button class="circular ui icon button">
        <i class="icon settings"></i>
      </button>
    </div>

    <div class="search-line">
      <hr>

      <button class="ui primary basic button ">
      Settings
      </button>

      <button class="ui primary right floated button">
        Search
      </button>

      <button class="ui secondary right floated button">
        Clear
      </button>
    </div>

  </div>




</div>
</section>