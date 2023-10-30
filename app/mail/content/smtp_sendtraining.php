<?php 

//Fix this smtp

$mail->Subject = "[INVITATION] GENBA Internal Training "; // Subject
$mail->addAddress("philip.lominoque.a5d@ap.denso.com"); // To send  //$requestDeptEmail
$mail->addCC("rein.banquiao.a0t@ap.denso.com","Rein Banquiao"); // To send  //$requestDeptEmail
$mail->AddEmbeddedImage("../../mail/template/denso.png", "denso_pic", "../../mail/template/denso.png");
$mail->AddEmbeddedImage("../../mail/template/genba.png", "genba_pic", "../../mail/template/genba.png");
$mail->AddEmbeddedImage("../../mail/template/main_etraining.jpg", "eTrain_pic", "../../mail/template/main_etraining.jpg");
// $mail->AddCC('rein.banquiao.a0t@ap.denso.com',"cc1");
$mail->Body = 
"<pre style=\"font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;\">".

    '<!DOCTYPE html>
    <html
      xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office"
      lang="en"
    >
      <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <!--[if mso
          ]><xml
            ><o:OfficeDocumentSettings
              ><o:PixelsPerInch>96</o:PixelsPerInch
              ><o:AllowPNG /></o:OfficeDocumentSettings></xml
        ><![endif]-->
        <style>
          * {
            box-sizing: border-box;
          }
          body {
            margin: 0;
            padding: 0;
          }
          a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: inherit !important;
          }
          #MessageViewBody a {
            color: inherit;
            text-decoration: none;
          }
          p {
            line-height: inherit;
          }
          .desktop_hide,
          .desktop_hide table {
            mso-hide: all;
            display: none;
            max-height: 0;
            overflow: hidden;
          }
          .image_block img + div {
            display: none;
          }
          @media (max-width: 520px) {
            .mobile_hide {
              display: none;
            }
            .row-content {
              width: 100% !important;
            }
            .stack .column {
              width: 100%;
              display: block;
            }
            .mobile_hide {
              min-height: 0;
              max-height: 0;
              max-width: 0;
              overflow: hidden;
              font-size: 0;
            }
            .desktop_hide,
            .desktop_hide table {
              display: table !important;
              max-height: none !important;
            }
          }
        </style>
      </head>
      <body
        style="
          background-color: #a7b9c1;
          margin: 0;
          padding: 0;
          -webkit-text-size-adjust: none;
          text-size-adjust: none;
        "
      >
        <table
          class="nl-container"
          width="100%"
          border="0"
          cellpadding="0"
          cellspacing="0"
          role="presentation"
          style="
            mso-table-lspace: 0;
            mso-table-rspace: 0;
            background-color: #a7b9c1;
          "
        >
          <tbody>
            <tr>
              <td>
                <table
                  class="row row-1"
                  align="center"
                  width="100%"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  role="presentation"
                  style="mso-table-lspace: 0; mso-table-rspace: 0"
                >
                  <tbody>
                    <tr>
                      <td>
                        <table
                          class="row-content stack"
                          align="center"
                          border="0"
                          cellpadding="0"
                          cellspacing="0"
                          role="presentation"
                          style="
                            mso-table-lspace: 0;
                            mso-table-rspace: 0;
                            color: #000;
                            width: 500px;
                            margin: 0 auto;
                          "
                          width="500"
                        >
                          <tbody>
                            <tr>
                              <td
                                class="column column-1"
                                width="100%"
                                style="
                                  mso-table-lspace: 0;
                                  mso-table-rspace: 0;
                                  font-weight: 400;
                                  text-align: left;
                                  padding-bottom: 5px;
                                  padding-top: 5px;
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <div
                                  class="spacer_block block-1"
                                  style="
                                    height: 21px;
                                    line-height: 21px;
                                    font-size: 1px;
                                  "
                                >
                                  &#8202;
                                </div>
                                <div
                                  class="spacer_block block-2"
                                  style="
                                    height: 21px;
                                    line-height: 21px;
                                    font-size: 1px;
                                  "
                                >
                                  &#8202;
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table
                  class="row row-2"
                  align="center"
                  width="100%"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  role="presentation"
                  style="mso-table-lspace: 0; mso-table-rspace: 0"
                >
                  <tbody>
                    <tr>
                      <td>
                        <table
                          class="row-content stack"
                          align="center"
                          border="0"
                          cellpadding="0"
                          cellspacing="0"
                          role="presentation"
                          style="
                            mso-table-lspace: 0;
                            mso-table-rspace: 0;
                            background-color: #fff;
                            color: #000;
                            border-radius: 0;
                            width: 500px;
                            margin: 0 auto;
                          "
                          width="500"
                        >
                          <tbody>
                            <tr>
                              <td
                                class="column column-1"
                                width="50%"
                                style="
                                  mso-table-lspace: 0;
                                  mso-table-rspace: 0;
                                  font-weight: 400;
                                  text-align: left;
                                  padding-bottom: 5px;
                                  padding-top: 5px;
                                  vertical-align: middle;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="image_block block-1"
                                  width="100%"
                                  border="0"
                                  cellpadding="0"
                                  cellspacing="0"
                                  role="presentation"
                                  style="mso-table-lspace: 0; mso-table-rspace: 0"
                                >
                                  <tr>
                                    <td
                                      class="pad"
                                      style="
                                        width: 100%;
                                        padding-right: 0;
                                        padding-left: 0;
                                      "
                                    >
                                      <div
                                        class="alignment"
                                        align="center"
                                        style="line-height: 10px"
                                      >
                                        <img
                                          src="cid:denso_pic"
                                          style="
                                            display: block;
                                            height: auto;
                                            border: 0;
                                            max-width: 175px;
                                            width: 100%;
                                          "
                                          width="175"
                                        />
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td
                                class="column column-2"
                                width="50%"
                                style="
                                  mso-table-lspace: 0;
                                  mso-table-rspace: 0;
                                  font-weight: 400;
                                  text-align: left;
                                  padding-bottom: 5px;
                                  padding-top: 5px;
                                  vertical-align: middle;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="image_block block-1"
                                  width="100%"
                                  border="0"
                                  cellpadding="0"
                                  cellspacing="0"
                                  role="presentation"
                                  style="mso-table-lspace: 0; mso-table-rspace: 0"
                                >
                                  <tr>
                                    <td
                                      class="pad"
                                      style="
                                        width: 100%;
                                        padding-right: 0;
                                        padding-left: 0;
                                      "
                                    >
                                      <div
                                        class="alignment"
                                        align="right"
                                        style="line-height: 10px"
                                      >
                                        <img
                                          src="cid:genba_pic"
                                          style="
                                            display: block;
                                            height: auto;
                                            border: 0;
                                            max-width: 188px;
                                            width: 100%;
                                          "
                                          width="188"
                                        />
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table
                  class="row row-3"
                  align="center"
                  width="100%"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  role="presentation"
                  style="mso-table-lspace: 0; mso-table-rspace: 0"
                >
                  <tbody>
                    <tr>
                      <td>
                        <table
                          class="row-content stack"
                          align="center"
                          border="0"
                          cellpadding="0"
                          cellspacing="0"
                          role="presentation"
                          style="
                            mso-table-lspace: 0;
                            mso-table-rspace: 0;
                            background-color: #fff;
                            color: #000;
                            width: 500px;
                            margin: 0 auto;
                          "
                          width="500"
                        >
                          <tbody>
                            <tr>
                              <td
                                class="column column-1"
                                width="100%"
                                style="
                                  mso-table-lspace: 0;
                                  mso-table-rspace: 0;
                                  font-weight: 400;
                                  text-align: left;
                                  padding-bottom: 5px;
                                  padding-top: 5px;
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <div
                                  class="spacer_block block-1"
                                  style="
                                    height: 21px;
                                    line-height: 21px;
                                    font-size: 1px;
                                  "
                                >
                                  &#8202;
                                </div>
                                <table
                                  class="text_block block-2"
                                  width="100%"
                                  border="0"
                                  cellpadding="0"
                                  cellspacing="0"
                                  role="presentation"
                                  style="
                                    mso-table-lspace: 0;
                                    mso-table-rspace: 0;
                                    word-break: break-word;
                                  "
                                >
                                  <tr>
                                    <td
                                      class="pad"
                                      style="
                                        padding-bottom: 10px;
                                        padding-left: 10px;
                                        padding-right: 10px;
                                      "
                                    >
                                      <div style="font-family: sans-serif">
                                        <div
                                          class
                                          style="
                                            font-size: 14px;
                                            font-family: Arial, Helvetica Neue,
                                              Helvetica, sans-serif;
                                            mso-line-height-alt: 16.8px;
                                            color: #000;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 14px;
                                              text-align: center;
                                              mso-line-height-alt: 16.8px;
                                            "
                                          >
                                            <strong
                                              ><span style="font-size: 20px"
                                                >Training Announcement</span
                                              ></strong
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                                <table
                                  class="image_block block-3"
                                  width="100%"
                                  border="0"
                                  cellpadding="0"
                                  cellspacing="0"
                                  role="presentation"
                                  style="mso-table-lspace: 0; mso-table-rspace: 0"
                                >
                                  <tr>
                                    <td class="pad" style="width: 100%">
                                      <div
                                        class="alignment"
                                        align="center"
                                        style="line-height: 10px"
                                      >
                                        <img
                                          src="cid:eTrain_pic"
                                          style="
                                            display: block;
                                            height: auto;
                                            border: 0;
                                            max-width: 440px;
                                            width: 100%;
                                          "
                                          width="440"
                                        />
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                                <div
                                  class="spacer_block block-4"
                                  style="
                                    height: 21px;
                                    line-height: 21px;
                                    font-size: 1px;
                                  "
                                >
                                  &#8202;
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table
                  class="row row-4"
                  align="center"
                  width="100%"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  role="presentation"
                  style="mso-table-lspace: 0; mso-table-rspace: 0"
                >
                  <tbody>
                    <tr>
                      <td>
                        <table
                          class="row-content stack"
                          align="center"
                          border="0"
                          cellpadding="0"
                          cellspacing="0"
                          role="presentation"
                          style="
                            mso-table-lspace: 0;
                            mso-table-rspace: 0;
                            background-color: #e2e9f0;
                            color: #000;
                            width: 500px;
                            margin: 0 auto;
                          "
                          width="500"
                        >
                          <tbody>
                            <tr>
                              <td
                                class="column column-1"
                                width="100%"
                                style="
                                  mso-table-lspace: 0;
                                  mso-table-rspace: 0;
                                  font-weight: 400;
                                  text-align: left;
                                  border-left: 10px solid #fff;
                                  border-right: 10px solid #fff;
                                  padding-bottom: 15px;
                                  padding-left: 15px;
                                  padding-right: 15px;
                                  padding-top: 15px;
                                  vertical-align: top;
                                  border-top: 0;
                                  border-bottom: 0;
                                "
                              >
                                <div
                                  class="spacer_block block-1"
                                  style="
                                    height: 21px;
                                    line-height: 21px;
                                    font-size: 1px;
                                  "
                                >
                                  &#8202;
                                </div>
                                <table
                                  class="text_block block-2"
                                  width="100%"
                                  border="0"
                                  cellpadding="10"
                                  cellspacing="0"
                                  role="presentation"
                                  style="
                                    mso-table-lspace: 0;
                                    mso-table-rspace: 0;
                                    word-break: break-word;
                                  "
                                >
                                  <tr>
                                    <td class="pad">
                                      <div style="font-family: sans-serif">
                                        <div
                                          class
                                          style="
                                            font-size: 14px;
                                            font-family: Arial, Helvetica Neue,
                                              Helvetica, sans-serif;
                                            mso-line-height-alt: 16.8px;
                                            color: #000;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 14px;
                                              text-align: left;
                                              mso-line-height-alt: 16.8px;
                                            "
                                          >
                                            <span style="font-size: 14px"
                                              >Dear All,</span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                                <table
                                  class="text_block block-3"
                                  width="100%"
                                  border="0"
                                  cellpadding="10"
                                  cellspacing="0"
                                  role="presentation"
                                  style="
                                    mso-table-lspace: 0;
                                    mso-table-rspace: 0;
                                    word-break: break-word;
                                  "
                                >
                                  <tr>
                                    <td class="pad">
                                      <div style="font-family: sans-serif">
                                        <div
                                          class
                                          style="
                                            font-size: 14px;
                                            font-family: Arial, Helvetica Neue,
                                              Helvetica, sans-serif;
                                            mso-line-height-alt: 16.8px;
                                            color: #000;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 14px;
                                              text-align: left;
                                              mso-line-height-alt: 16.8px;
                                            "
                                          >
                                            Good day!
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                                <table
                                  class="text_block block-4"
                                  width="100%"
                                  border="0"
                                  cellpadding="10"
                                  cellspacing="0"
                                  role="presentation"
                                  style="
                                    mso-table-lspace: 0;
                                    mso-table-rspace: 0;
                                    word-break: break-word;
                                  "
                                >
                                  <tr>
                                    <td class="pad">
                                      <div style="font-family: sans-serif">
                                        <div
                                          class
                                          style="
                                            font-size: 14px;
                                            font-family: Arial, Helvetica Neue,
                                              Helvetica, sans-serif;
                                            mso-line-height-alt: 16.8px;
                                            color: #000;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              mso-line-height-alt: 16.8px;
                                            "
                                          >
                                            Please be informed that we\'ll be having
                                            a '.$name.' Training.
                                          </p>
                                          <p
                                            style="
                                              margin: 0;
                                              mso-line-height-alt: 16.8px;
                                            "
                                          >
                                            &nbsp;
                                          </p>
                                          <p
                                            style="
                                              margin: 0;
                                              mso-line-height-alt: 16.8px;
                                            "
                                          >
                                            When: '.$start_date.' '.$start_time.' - '.$start_date.' '.$end_time.'
                                          </p>
                                          <p
                                            style="
                                              margin: 0;
                                              mso-line-height-alt: 16.8px;
                                            "
                                          >
                                            Where: '.$location.'
                                          </p>
                                          <p
                                            style="
                                              margin: 0;
                                              mso-line-height-alt: 16.8px;
                                            "
                                          >
                                            Who: '.$trainor.'
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                                <table
                                  class="text_block block-5"
                                  width="100%"
                                  border="0"
                                  cellpadding="10"
                                  cellspacing="0"
                                  role="presentation"
                                  style="
                                    mso-table-lspace: 0;
                                    mso-table-rspace: 0;
                                    word-break: break-word;
                                  "
                                >
                                  <tr>
                                    <td class="pad">
                                      <div style="font-family: sans-serif">
                                        <div
                                          class
                                          style="
                                            font-size: 14px;
                                            font-family: Arial, Helvetica Neue,
                                              Helvetica, sans-serif;
                                            mso-line-height-alt: 16.8px;
                                            color: #000;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              mso-line-height-alt: 16.8px;
                                            "
                                          >
                                            Please Click this <a  href="http://'.$ip_address.'/DNPH/_eTrainingAttendance/app/public/view/login.php?redirect=attendeesForm&tnum='.$num.'"  >link</a> to view and
                                            select your attendees.
                                          </p>
                                          <p
                                            style="
                                              margin: 0;
                                              mso-line-height-alt: 16.8px;
                                            "
                                          >
                                            &nbsp;
                                          </p>
                                          <p
                                            style="
                                              margin: 0;
                                              mso-line-height-alt: 16.8px;
                                            "
                                          >
                                            Thank you.
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                                <div
                                  class="spacer_block block-6"
                                  style="
                                    height: 21px;
                                    line-height: 21px;
                                    font-size: 1px;
                                  "
                                >
                                  &#8202;
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table
                  class="row row-5"
                  align="center"
                  width="100%"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  role="presentation"
                  style="mso-table-lspace: 0; mso-table-rspace: 0"
                >
                  <tbody>
                    <tr>
                      <td>
                        <table
                          class="row-content stack"
                          align="center"
                          border="0"
                          cellpadding="0"
                          cellspacing="0"
                          role="presentation"
                          style="
                            mso-table-lspace: 0;
                            mso-table-rspace: 0;
                            background-color: #e2e9f0;
                            color: #000;
                            width: 500px;
                            margin: 0 auto;
                          "
                          width="500"
                        >
                          <tbody>
                            <tr>
                              <td
                                class="column column-1"
                                width="100%"
                                style="
                                  mso-table-lspace: 0;
                                  mso-table-rspace: 0;
                                  font-weight: 400;
                                  text-align: left;
                                  border-left: 10px solid #fff;
                                  border-right: 10px solid #fff;
                                  padding-bottom: 5px;
                                  padding-left: 5px;
                                  padding-right: 5px;
                                  padding-top: 5px;
                                  vertical-align: top;
                                  border-top: 0;
                                  border-bottom: 0;
                                "
                              >
                                <div
                                  class="spacer_block block-1"
                                  style="
                                    height: 21px;
                                    line-height: 21px;
                                    font-size: 1px;
                                  "
                                >
                                  &#8202;
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table
                  class="row row-6"
                  align="center"
                  width="100%"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  role="presentation"
                  style="mso-table-lspace: 0; mso-table-rspace: 0"
                >
                  <tbody>
                    <tr>
                      <td>
                        <table
                          class="row-content stack"
                          align="center"
                          border="0"
                          cellpadding="0"
                          cellspacing="0"
                          role="presentation"
                          style="
                            mso-table-lspace: 0;
                            mso-table-rspace: 0;
                            background-color: #fff;
                            color: #000;
                            width: 500px;
                            margin: 0 auto;
                          "
                          width="500"
                        >
                          <tbody>
                            <tr>
                              <td
                                class="column column-1"
                                width="100%"
                                style="
                                  mso-table-lspace: 0;
                                  mso-table-rspace: 0;
                                  font-weight: 400;
                                  text-align: left;
                                  padding-bottom: 5px;
                                  padding-top: 5px;
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <div
                                  class="spacer_block block-1"
                                  style="
                                    height: 21px;
                                    line-height: 21px;
                                    font-size: 1px;
                                  "
                                >
                                  &#8202;
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table
                  class="row row-7"
                  align="center"
                  width="100%"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  role="presentation"
                  style="mso-table-lspace: 0; mso-table-rspace: 0"
                >
                  <tbody>
                    <tr>
                      <td>
                        <table
                          class="row-content stack"
                          align="center"
                          border="0"
                          cellpadding="0"
                          cellspacing="0"
                          role="presentation"
                          style="
                            mso-table-lspace: 0;
                            mso-table-rspace: 0;
                            color: #000;
                            width: 500px;
                            margin: 0 auto;
                          "
                          width="500"
                        >
                          <tbody>
                            <tr>
                              <td
                                class="column column-1"
                                width="100%"
                                style="
                                  mso-table-lspace: 0;
                                  mso-table-rspace: 0;
                                  font-weight: 400;
                                  text-align: left;
                                  padding-bottom: 25px;
                                  padding-top: 25px;
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="empty_block block-1"
                                  width="100%"
                                  border="0"
                                  cellpadding="0"
                                  cellspacing="0"
                                  role="presentation"
                                  style="mso-table-lspace: 0; mso-table-rspace: 0"
                                >
                                  <tr>
                                    <td class="pad"><div></div></td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- End -->
        <div style="background-color: transparent">
          <div
            style="
              margin: 0 auto;
              min-width: 320px;
              max-width: 500px;
              overflow-wrap: break-word;
              word-wrap: break-word;
              word-break: break-word;
              background-color: transparent;
            "
            class="block-grid"
          >
            <div
              style="
                border-collapse: collapse;
                display: table;
                width: 100%;
                background-color: transparent;
              "
            >
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->
              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:15px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
              <div
                class="col num12"
                style="
                  min-width: 320px;
                  max-width: 500px;
                  display: table-cell;
                  vertical-align: top;
                "
              >
                <div style="background-color: transparent; width: 100% !important">
                  <!--[if (!mso)&(!IE)]><!-->
                  <div
                    style="
                      border-top: 0px solid transparent;
                      border-left: 0px solid transparent;
                      border-bottom: 0px solid transparent;
                      border-right: 0px solid transparent;
                      padding-top: 15px;
                      padding-bottom: 15px;
                      padding-right: 0px;
                      padding-left: 0px;
                    "
                  >
                    <!--<![endif]-->
    
                    <div
                      align="center"
                      class="img-container center autowidth"
                      style="padding-right: 0px; padding-left: 0px"
                    >
    
                      <!--[if mso]></td></tr></table><![endif]-->
                    </div>
    
                    <!--[if (!mso)&(!IE)]><!-->
                  </div>
                  <!--<![endif]-->
                </div>
              </div>
              <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
      </body>
    </html>'.

    // $detail."<br>".

    // $status."<br>".

    // $occur."<br>".

    // $occur_num."<br>".

    // $start_time." ".$end_time.

    // $remarks."<br>".

    // $training_min_req."<br>".

    // $training_max_req."<br>".

    // $trainor."<br>".

"</pre>";
$mail->send(); // send to one person

?>