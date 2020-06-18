
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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

      h2 {
        color: #5D6975;
        font-size: 2em;
        padding-left: 165px;
        line-height: 1.4em;
        font-weight: normal;
        text-align: right;
        margin: 0 0 20px 0;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
      }

      table tr td {
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
        padding: 10px;
        text-align: right;
        vertical-align: top;
        font-size: 1.2em;
      }
      .content-wrapper table tr td {
        border-top: 1px solid #C1CED9;
      }
      .container{
        max-width: 900px;
        width: 100%;
        margin: auto;
        position: relative;
      }
      .content-wrapper{
        padding: 15px;
      }
      .content-title{
        padding: 20px;
      }
    </style>
  </head>
  <body>
    <table class="container">
      <tr>
        <td>
      <table class="content-wrapper">
        <tr>
          <td>
        <table class="content-title">
          <tr>
            <td>
              <h2 style="margin:0; mso-line-height-rule:exactly;">Դուք կատարել եք գնումներ {sitename}-ից</h2>
              <p>Ձեզ ենք ներկայացնում կատարված գնումների ցանկը</p>
              <img src="{headerImage}" style="max-width:100%;position: absolute;left: 20px;top: 30px;">
            </td>
          </tr>
        </table>
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
            {invoice}
          </tbody>
        </table>
        <table class="">
          <tr>
            <td>
              Շնորհակալություն գնումների համար։ Հարգանքներով {sitename};
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</td>
</tr>
</table>

</body>
