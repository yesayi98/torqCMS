<head>
  <style type="text/css" title="x-apple-mail-formatting"></style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>{sitename}</title>
        <style>
    /* -------------------------------------
    RESPONSIVENESS
    !importants in here are necessary :/
    ------------------------------------- */
    @media only screen and (max-device-width: 700px) {
      .table-wrapper {
        margin-top: 0px !important;
        border-radius: 0px !important;
      }


      .header {
        padding: 10px 0;
        margin-bottom: 30px;
        border-radius: 0px !important;
      }
    }

    body {
      position: relative;
      height: 29.7cm;
      margin: 0 auto;
      color: #001028;
      background: #FFFFFF;
      font-family: Arial, sans-serif;
      font-size: 12px;
      font-family: Arial;
    }

    h1 {
      border-top: 1px solid  #5D6975;
      border-bottom: 1px solid  #5D6975;
      color: #5D6975;
      font-size: 2.4em;
      line-height: 1.4em;
      font-weight: normal;
      text-align: center;
      margin: 0 0 20px 0;
      background: url(dimension.png);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-bottom: 20px;
    }

    table tr:nth-child(2n-1) td {
      background: #F5F5F5;
    }

    table th,
    table td {
      text-align: center;
    }

    table th {
      padding: 5px 20px;
      color: #5D6975;
      border-bottom: 1px solid #C1CED9;
      white-space: nowrap;
      font-weight: normal;
    }

    table td {
      padding: 20px;
      text-align: right;
      vertical-align: top;
      font-size: 1.2em;
      border-top: 1px solid #5D6975;;
    }

    #notices .notice {
      color: #5D6975;
      font-size: 1.2em;
    }

    footer {
      color: #5D6975;
      width: 100%;
      height: 30px;
      bottom: 0;
      border-top: 1px solid #C1CED9;
      padding: 8px 0;
      text-align: center;
    }
    .container{
      max-width: 900px;
      margin: auto;
    }
    .content-wrapper{
      padding: 15px;
    }
    </style>

  </head>
  <body>
    <div class="container">
      <div class="content-wrapper">
        <div class="content-title">
          <h2>Դուք կատարել եք գնումներ {sitename}-ից</h2>
          <p>Ձեզ ենք ներկայացնում կատարված գնումների ցանկը</p>
        </div>
        <table style="background: #F5F6F7;" width="100%" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th class="service">ID</th>
              <th class="desc">ԱՆՈՒՆ</th>
              <th>ԳԻՆ</th>
              <th>ՔԱՆԱԿ</th>
              <th>ԸՆԴՀԱՆՈՒՐ</th>
            </tr>
          </thead>
          <tbody>
            <tbody>
              {invoice}
            </tbody>
          </tbody>
        </table>
        <div class="">
          Շնորհակալություն գնումների համար։ Հարգանքներով {sitename};
        </div>
      </div>
    </div>

</body>
