<?php 

//Fix this smtp

$mail->Subject = "[INVITATION] GENBA Internal Training "; // Subject
$mail->addAddress("philip.lominoque.a5d@ap.denso.com"); // To send  //$requestDeptEmail
$mail->addCC("rein.banquiao.a0t@ap.denso.com","Rein Banquiao"); // To send  //$requestDeptEmail
$mail->AddEmbeddedImage("../../mail/template/denso.png", "denso_pic", "../../mail/template/denso.png");
$mail->AddEmbeddedImage("../../mail/template/genba.png", "genba_pic", "../../mail/template/genba.png");
$mail->AddEmbeddedImage("../../mail/template/main_etraining.jpg", "eTrain_pic", "../../mail/template/main_etraining.jpg");
$body = 
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
          @media (max-width: 670px) {
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
          margin: 0;
          background-color: #dfdfdf;
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
            background-color: #dfdfdf;
          "
        >
          <tbody>
            <tr>
              <td>
                <table
                  class="row row-2"
                  align="center"
                  width="100%"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  role="presentation"
                  style="
                    mso-table-lspace: 0;
                    mso-table-rspace: 0;
                    background-color: #dfdfdf;
                    background-size: auto;
                  "
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
                            background-color: #dc0032;
                            background-size: auto;
                            border-bottom: 0 solid #939393;
                            border-left: 0 solid #939393;
                            border-right: 0 solid #939393;
                            border-top: 0 solid #939393;
                            color: #000;
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
                        >
                          <tbody>
                            <tr>
                              <td
                                class="column column-1"
                                width="66.66666666666667%"
                                style="
                                  mso-table-lspace: 0;
                                  mso-table-rspace: 0;
                                  font-weight: 400;
                                  text-align: left;
                                  padding-bottom: 20px;
                                  padding-left: 20px;
                                  padding-right: 20px;
                                  padding-top: 20px;
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            <span style="font-size: 15px"
                                              ><strong
                                                ><span style="color: #dfdfdf"
                                                  >e-Training Attendance
                                                  System</span
                                                ></strong
                                              ></span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td
                                class="column column-2"
                                width="33.333333333333336%"
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
                                          src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/0db9f180-d222-4b2b-9371-cf9393bf4764/0bd8b69e-4024-4f26-9010-6e2a146401fb/MicrosoftTeams-image_3.png"
                                          style="
                                            display: block;
                                            height: auto;
                                            border: 0;
                                            max-width: 151.66666666666666px;
                                            width: 100%;
                                          "
                                          width="151.66666666666666"
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
                  style="
                    mso-table-lspace: 0;
                    mso-table-rspace: 0;
                    background-color: #dfdfdf;
                  "
                >
                  <tbody>
                    <tr>
                      <td>
                        <table
                          class="row-content"
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
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #000;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            Hello&nbsp;<br /><br />Good day!
                                          </p>
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            &nbsp;
                                          </p>
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            A line leader has been successfully
                                            registered.
                                          </p>
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            &nbsp;
                                          </p>
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            Kindly see the information below.
                                          </p>
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            &nbsp;
                                          </p>
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            Thank you.
                                          </p>
                                        </div>
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
                            background-color: #fff;
                            color: #000;
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
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
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="divider_block block-1"
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
                                        padding-bottom: 10px;
                                        padding-top: 10px;
                                      "
                                    >
                                      <div class="alignment" align="center">
                                        <table
                                          border="0"
                                          cellpadding="0"
                                          cellspacing="0"
                                          role="presentation"
                                          width="100%"
                                          style="
                                            mso-table-lspace: 0;
                                            mso-table-rspace: 0;
                                          "
                                        >
                                          <tr>
                                            <td
                                              class="divider_inner"
                                              style="
                                                font-size: 1px;
                                                line-height: 1px;
                                                border-top: 1px solid #bbb;
                                              "
                                            >
                                              <span>&#8202;</span>
                                            </td>
                                          </tr>
                                        </table>
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
                            background-color: #fff;
                            color: #000;
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
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
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
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
                                            <span style="font-size: 12px"
                                              ><strong>Registration No. #</strong
                                              >&nbsp;'.$REG_NUM.'</span
                                            >
                                          </p>
                                        </div>
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
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
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
                                            <span style="font-size: 12px"
                                              ><strong>Date Registered</strong>: '.$REG_TIMESTAMP.'&nbsp;</span
                                            >
                                          </p>
                                        </div>
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
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
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
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
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
                                            <span style="font-size: 12px"
                                              ><strong>From</strong>: '.$TRAINING_START_DATE.' - '.$TRAINING_START_TIME.'</span
                                            >
                                          </p>
                                        </div>
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
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
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
                                            <span style="font-size: 12px"
                                              ><strong>To</strong>: '.$TRAINING_END_DATE.' - '.$TRAINING_END_TIME.'</span
                                            >
                                          </p>
                                        </div>
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
                            background-color: #fff;
                            color: #000;
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
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
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
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
                                            <span style="font-size: 12px"
                                              ><strong>Min of Participants</strong>:'.$TRAINING_MIN_REQ.'</span
                                            >
                                          </p>
                                        </div>
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
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
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
                                            <span style="font-size: 12px"
                                              ><strong>Max of Participants</strong>:'.$TRAINING_MAX_REQ.'</span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </tbody>
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
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
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
                                            <span style="font-size: 12px"
                                              ><strong>Leader Name</strong>:'.$REG_LEADER_NAME.'</span
                                            >
                                          </p>
                                        </div>
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
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
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
                                            <span style="font-size: 12px"
                                              ><strong>Leader Employee ID</strong>:'.$REG_LEADER_ID.'</span
                                            >
                                          </p>
                                        </div>
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
                  class="row row-8"
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
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
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
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="divider_block block-1"
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
                                        padding-bottom: 10px;
                                        padding-top: 10px;
                                      "
                                    >
                                      <div class="alignment" align="center">
                                        <table
                                          border="0"
                                          cellpadding="0"
                                          cellspacing="0"
                                          role="presentation"
                                          width="100%"
                                          style="
                                            mso-table-lspace: 0;
                                            mso-table-rspace: 0;
                                          "
                                        >
                                          <tr>
                                            <td
                                              class="divider_inner"
                                              style="
                                                font-size: 1px;
                                                line-height: 1px;
                                                border-top: 1px solid #bbb;
                                              "
                                            >
                                              <span>&#8202;</span>
                                            </td>
                                          </tr>
                                        </table>
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
                  class="row row-9"
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
                          class="row-content"
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
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
                        >
                          <tbody>
                            <tr>
                              <td
                                class="column column-1"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            dir="ltr"
                                            style="
                                              margin: 0;
                                              font-size: 14px;
                                              text-align: center;
                                              mso-line-height-alt: 16.8px;
                                            "
                                          >
                                            <span style="color: #000000"
                                              ><strong
                                                ><span style="font-size: 12px"
                                                  >Employee ID</span
                                                ></strong
                                              ></span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td
                                class="column column-2"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              text-align: center;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            <span style="font-size: 12px"
                                              ><span style="color: #000000"
                                                ><strong>Name</strong></span
                                              ></span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td
                                class="column column-3"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
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
                                            <span style="color: #000000"
                                              ><strong
                                                ><span style="font-size: 12px"
                                                  >Department</span
                                                ></strong
                                              ></span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td
                                class="column column-4"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
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
                                            <span style="color: #000000"
                                              ><strong
                                                ><span style="font-size: 12px"
                                                  >Section</span
                                                ></strong
                                              ></span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td
                                class="column column-5"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              text-align: center;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            <span style="color: #000000"
                                              ><strong
                                                ><span style>Position</span></strong
                                              ></span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td
                                class="column column-6"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              text-align: center;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            <span style="color: #000000"
                                              ><strong>Status</strong></span
                                            >
                                          </p>
                                        </div>
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
                  class="row row-10"
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
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
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
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="divider_block block-1"
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
                                        padding-bottom: 10px;
                                        padding-top: 10px;
                                      "
                                    >
                                      <div class="alignment" align="center">
                                        <table
                                          border="0"
                                          cellpadding="0"
                                          cellspacing="0"
                                          role="presentation"
                                          width="100%"
                                          style="
                                            mso-table-lspace: 0;
                                            mso-table-rspace: 0;
                                          "
                                        >
                                          <tr>
                                            <td
                                              class="divider_inner"
                                              style="
                                                font-size: 1px;
                                                line-height: 1px;
                                                border-top: 1px solid #bbb;
                                              "
                                            >
                                              <span>&#8202;</span>
                                            </td>
                                          </tr>
                                        </table>
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
                </table>';
                                  
                  // create list of this

                  $sel_list = "SELECT * FROM tblsubreg_assoc WHERE REG_MAIN_NUM =  '$REG_NUM'";
                  //$selectedList = mysqli_query($link, $sel_list);

                  if($result = mysqli_query($link, $sel_list)){

                      if(mysqli_num_rows($result) > 0 ){

                          while($sub = mysqli_fetch_array($result)){

                            $REG_SUB_EMP_ID = $sub['REG_SUB_EMP_ID'];
                            $REG_SUB_EMP_NAME = $sub['REG_SUB_EMP_NAME'];
                            $REG_SUB_EMP_DEPT = $sub['REG_SUB_EMP_DEPT'];
                            $REG_SUB_EMP_SECT = $sub['REG_SUB_EMP_SECT'];
                            $REG_SUB_EMP_POSITION = $sub['REG_SUB_EMP_POSITION'];
                            $REG_SUB_STATUS = $sub['REG_SUB_STATUS'];
                  
                  $body.='
                  
                  <table
                    class="row row-11"
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
                          class="row-content"
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
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
                        >
                          <tbody>
                            <tr>
                              <td
                                class="column column-1"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              text-align: center;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            <span style="font-size: 11px"
                                              >'.$REG_SUB_EMP_ID.'</span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td
                                class="column column-2"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              text-align: center;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            <span style="font-size: 11px"
                                              >'.$REG_SUB_EMP_NAME.'</span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td
                                class="column column-3"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              text-align: center;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            <span style="font-size: 11px">'.$REG_SUB_EMP_DEPT.'</span>
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td
                                class="column column-4"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
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
                                            <span
                                              style="
                                                font-size: 11px;
                                                color: #000000;
                                              "
                                              ><span style="color: #808080"
                                                >'.$REG_SUB_EMP_SECT.'</span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td
                                class="column column-5"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              text-align: center;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            <span style="font-size: 11px"
                                              >'.$REG_SUB_EMP_POSITION.'</span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td
                                class="column column-6"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #007641;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              text-align: center;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                            <span style="font-size: 11px"
                                              >'.$REG_SUB_STATUS.'</span
                                            >
                                          </p>
                                        </div>
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
                      </table>';
                      // create training
                        }
                          mysqli_free_result($result);
                      }
                      else { 
                          return false; 
                      }
                  }
                  else{ 
                      echo "ERROR: Could not able to execute $sel_link. " . mysqli_error($link); 
                  }
                      
                $body2 ='
                 
                <table
                  class="row row-13"
                  align="center"
                  width="100%"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  role="presentation"
                  style="
                    mso-table-lspace: 0;
                    mso-table-rspace: 0;
                    background-color: #dfdfdf;
                  "
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
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
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
                                <table
                                  class="divider_block block-1"
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
                                        padding-bottom: 10px;
                                        padding-top: 10px;
                                      "
                                    >
                                      <div class="alignment" align="center">
                                        <table
                                          border="0"
                                          cellpadding="0"
                                          cellspacing="0"
                                          role="presentation"
                                          width="100%"
                                          style="
                                            mso-table-lspace: 0;
                                            mso-table-rspace: 0;
                                          "
                                        >
                                          <tr>
                                            <td
                                              class="divider_inner"
                                              style="
                                                font-size: 1px;
                                                line-height: 1px;
                                                border-top: 1px solid #bbb;
                                              "
                                            >
                                              <span>&#8202;</span>
                                            </td>
                                          </tr>
                                        </table>
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
                  class="row row-14"
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
                          class="row-content"
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
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
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
                                    height: 60px;
                                    line-height: 60px;
                                    font-size: 1px;
                                  "
                                >
                                  &#8202;
                                </div>
                              </td>
                              <td
                                class="column column-3"
                                width="16.666666666666668%"
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
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                          <strong>Training Number:</strong> '.$TRAINING_NUM.'
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                          <strong>Title:</strong> '.$TRAINING_NAME.'
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                          <strong>Trainer:</strong> '.$TRAINING_TRAINOR.'
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 14.399999999999999px;
                                            color: #555;
                                            line-height: 1.2;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 12px;
                                              text-align: left;
                                              mso-line-height-alt: 14.399999999999999px;
                                            "
                                          >
                                          <strong>Location:</strong> '.$TRAINING_LOCATION.'
                                          </p>
                                        </div>
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
                  class="row row-15"
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
                            background-color: #dc0032;
                            border-radius: 0;
                            color: #000;
                            width: 650px;
                            margin: 0 auto;
                          "
                          width="650"
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
                                  vertical-align: top;
                                  border-top: 0;
                                  border-right: 0;
                                  border-bottom: 0;
                                  border-left: 0;
                                "
                              >
                                <table
                                  class="text_block block-1"
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
                                            font-size: 12px;
                                            font-family: Helvetica Neue, Helvetica,
                                              Arial, sans-serif;
                                            mso-line-height-alt: 18px;
                                            color: #555;
                                            line-height: 1.5;
                                          "
                                        >
                                          <p
                                            style="
                                              margin: 0;
                                              font-size: 14px;
                                              text-align: center;
                                              mso-line-height-alt: 21px;
                                            "
                                          >
                                            <a
                                              href="'.$login_url.'"
                                              target="_blank"
                                              style="
                                                text-decoration: underline;
                                                color: #ffffff;
                                              "
                                              rel="noopener"
                                              >Click here to login</a
                                            >
                                          </p>
                                        </div>
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
    </html>
    '.

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
$mail->Body =  $body. $body2;
$mail->send(); // send to one person
