<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TLR global</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/splide.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
    <header class="<?php echo $header_class; ?>">
        <div class="container">
            <div class="top-header">
                <ul class="top-header-list">
                    <li><a href="#">News & Insights</a></li>
                    <li><a href="#">About TLR</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <nav class="main-header">
                <div class="logo">
                    <a href="index.php">
                        <span class="icon logo-white">
                            <svg width="233" height="45" viewBox="0 0 233 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M61.9523 13.3379H53.663V7.91016H76.3668V13.3379H68.0774V36.4773H61.9523V13.3379Z" fill="#E8E8E8"/>
                                <path d="M79.3885 7.91016H85.5137V31.1719H98.6623V36.4773H79.3885V7.91016Z" fill="#E8E8E8"/>
                                <path d="M101.888 7.91016H113.444C121.039 7.91016 124.347 11.8687 124.347 17.4597C124.347 21.4999 122.591 24.7647 118.63 26.1931L124.633 36.4773H118.589L113.158 26.9685H108.013V36.4773H101.888V7.91016ZM118.059 17.4597C118.059 14.8887 116.588 13.2155 113.24 13.2155H108.013V21.6632H113.24C116.588 21.6632 118.059 19.99 118.059 17.4597Z" fill="#E8E8E8"/>
                                <path d="M136.271 38.5928H138.353C138.476 41.3271 141.334 43.0411 145.336 43.0411C149.542 43.0411 152.89 41.1639 152.89 36.2666V31.9816H152.808C151.216 34.7567 148.072 36.0626 144.968 36.0626C140.027 36.0626 135.495 32.757 135.495 25.4519C135.495 18.1469 140.027 14.8413 144.968 14.8413C148.072 14.8413 151.216 16.1472 152.808 18.9223H152.89V15.2494H155.299V36.2666C155.299 43.0819 149.991 45 145.295 45C140.599 45 136.311 43.1227 136.271 38.5928ZM153.006 25.4588C153.006 19.6229 149.249 16.8886 145.329 16.8886C141.409 16.8886 137.815 19.6229 137.815 25.4588C137.815 31.2946 141.409 33.9881 145.329 33.9881C149.249 33.9881 153.006 31.2946 153.006 25.4588Z" fill="#E8E8E8"/>
                                <path d="M159.097 7.91016H161.506V36.4773H159.097V7.91016Z" fill="#E8E8E8"/>
                                <path d="M164.324 25.8601C164.324 18.351 169.142 14.8413 174.41 14.8413C179.677 14.8413 184.455 18.351 184.455 25.8601C184.455 33.3691 179.637 36.8788 174.41 36.8788C169.183 36.8788 164.324 33.3691 164.324 25.8601ZM182.121 25.8601C182.121 19.6569 178.364 16.8818 174.403 16.8818C170.442 16.8818 166.685 19.6569 166.685 25.8601C166.685 32.0632 170.442 34.8383 174.403 34.8383C178.364 34.8383 182.121 32.0632 182.121 25.8601Z" fill="#E8E8E8"/>
                                <path d="M189.675 32.7159V36.4705H187.266V7.91016H189.675V19.0105C191.349 16.1946 194.453 14.8479 197.597 14.8479C202.66 14.8479 207.234 18.2759 207.234 25.8666C207.234 33.4573 202.66 36.8854 197.597 36.8854C194.453 36.8854 191.349 35.5386 189.675 32.7227V32.7159ZM204.947 25.8598C204.947 19.7383 201.231 16.8816 197.27 16.8816C193.309 16.8816 189.552 19.7383 189.552 25.8598C189.552 31.9813 193.391 34.8381 197.27 34.8381C201.149 34.8381 204.947 31.9813 204.947 25.8598Z" fill="#E8E8E8"/>
                                <path d="M208.99 31.213C208.99 27.785 211.195 25.7853 215.645 25.2547L221.24 24.6018C223.649 24.3569 224.384 23.7856 224.384 23.1326V21.9491C224.384 18.1538 222.465 16.7662 218.504 16.7662C214.543 16.7662 212.583 18.1946 212.583 21.0921V21.5818H210.255V20.9289C210.255 16.6846 213.318 14.8481 218.586 14.8481C223.853 14.8481 226.793 16.9295 226.793 21.9899V36.4775H224.466V32.6006H224.343C223.731 33.8657 221.076 36.8856 215.89 36.8856C211.766 36.8856 208.99 35.0084 208.99 31.213ZM224.384 29.1725V25.3772C224.262 25.8669 223.404 26.3158 221.076 26.6015L216.217 27.132C212.542 27.5809 211.399 29.0093 211.399 31.0498C211.399 33.9473 213.645 34.8859 216.381 34.8859C221.811 34.8859 224.384 31.1722 224.384 29.1725Z" fill="#E8E8E8"/>
                                <path d="M230.591 7.91016H233V36.4773H230.591V7.91016Z" fill="#E8E8E8"/>
                                <path d="M23.9629 41.6876C-0.258562 43.3336 -9.06514 11.1752 11.4541 0C4.81169 9.43395 6.0163 16.222 6.0163 16.222C8.71135 11.8213 13.8088 10.6378 15.9798 10.3114C4.21278 19.6229 8.1669 38.7765 23.9629 41.6808V41.6876Z" fill="#13DA80"/>
                                <path d="M43.6655 26.683C39.058 44.6871 11.5562 42.9935 12.2708 22.9897C12.6042 16.4805 17.9127 10.7875 23.6091 9.27071C19.0424 9.29111 17.1981 6.0467 18.4231 2.72068C18.5728 2.29897 18.4571 2.55744 18.6137 2.91112C21.2543 7.19619 25.9162 3.6185 28.9856 8.0192C30.7891 7.76753 32.5654 10.4814 32.2387 11.5425C24.3441 8.07361 19.5461 20.6295 27.8218 23.3434C39.7726 25.9757 40.0993 3.66611 33.3548 0C44.8292 6.23715 48.164 23.5815 37.5403 30.7028C41.5829 29.4853 43.6723 26.6762 43.6723 26.6762L43.6655 26.683Z" fill="#13DA80"/>
                            </svg> 
                        </span>
                        <span class="icon logo-black">
                            <svg width="233" height="45" viewBox="0 0 233 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M61.9524 13.3379H53.6631V7.91016H76.3669V13.3379H68.0776V36.4773H61.9524V13.3379Z" fill="#1E1E1E"/>
                                <path d="M79.3887 7.91016H85.5138V31.1719H98.6624V36.4773H79.3887V7.91016Z" fill="#1E1E1E"/>
                                <path d="M101.888 7.91016H113.444C121.039 7.91016 124.347 11.8687 124.347 17.4597C124.347 21.4999 122.591 24.7647 118.63 26.1931L124.633 36.4773H118.589L113.158 26.9685H108.013V36.4773H101.888V7.91016ZM118.059 17.4597C118.059 14.8887 116.588 13.2155 113.24 13.2155H108.013V21.6632H113.24C116.588 21.6632 118.059 19.99 118.059 17.4597Z" fill="#1E1E1E"/>
                                <path d="M136.27 38.5928H138.353C138.476 41.3271 141.334 43.0411 145.336 43.0411C149.542 43.0411 152.89 41.1639 152.89 36.2666V31.9816H152.808C151.216 34.7567 148.072 36.0626 144.968 36.0626C140.027 36.0626 135.495 32.757 135.495 25.4519C135.495 18.1469 140.027 14.8413 144.968 14.8413C148.072 14.8413 151.216 16.1472 152.808 18.9223H152.89V15.2494H155.299V36.2666C155.299 43.0819 149.991 45 145.295 45C140.599 45 136.311 43.1227 136.27 38.5928ZM153.006 25.4588C153.006 19.6229 149.249 16.8886 145.329 16.8886C141.409 16.8886 137.815 19.6229 137.815 25.4588C137.815 31.2946 141.409 33.9881 145.329 33.9881C149.249 33.9881 153.006 31.2946 153.006 25.4588Z" fill="#1E1E1E"/>
                                <path d="M159.097 7.91016H161.506V36.4773H159.097V7.91016Z" fill="#1E1E1E"/>
                                <path d="M164.324 25.8601C164.324 18.351 169.142 14.8413 174.41 14.8413C179.677 14.8413 184.455 18.351 184.455 25.8601C184.455 33.3691 179.637 36.8788 174.41 36.8788C169.183 36.8788 164.324 33.3691 164.324 25.8601ZM182.121 25.8601C182.121 19.6569 178.364 16.8818 174.403 16.8818C170.442 16.8818 166.685 19.6569 166.685 25.8601C166.685 32.0632 170.442 34.8383 174.403 34.8383C178.364 34.8383 182.121 32.0632 182.121 25.8601Z" fill="#1E1E1E"/>
                                <path d="M189.675 32.7159V36.4705H187.266V7.91016H189.675V19.0105C191.349 16.1946 194.452 14.8479 197.597 14.8479C202.66 14.8479 207.234 18.2759 207.234 25.8666C207.234 33.4573 202.66 36.8854 197.597 36.8854C194.452 36.8854 191.349 35.5386 189.675 32.7227V32.7159ZM204.947 25.8598C204.947 19.7383 201.231 16.8816 197.27 16.8816C193.309 16.8816 189.552 19.7383 189.552 25.8598C189.552 31.9813 193.391 34.8381 197.27 34.8381C201.149 34.8381 204.947 31.9813 204.947 25.8598Z" fill="#1E1E1E"/>
                                <path d="M208.99 31.213C208.99 27.785 211.195 25.7853 215.646 25.2547L221.24 24.6018C223.649 24.3569 224.384 23.7856 224.384 23.1326V21.9491C224.384 18.1538 222.465 16.7662 218.504 16.7662C214.543 16.7662 212.583 18.1946 212.583 21.0921V21.5818H210.256V20.9289C210.256 16.6846 213.318 14.8481 218.586 14.8481C223.853 14.8481 226.793 16.9295 226.793 21.9899V36.4775H224.466V32.6006H224.343C223.731 33.8657 221.077 36.8856 215.891 36.8856C211.766 36.8856 208.99 35.0084 208.99 31.213ZM224.384 29.1725V25.3772C224.262 25.8669 223.404 26.3158 221.077 26.6015L216.217 27.132C212.542 27.5809 211.399 29.0093 211.399 31.0498C211.399 33.9473 213.645 34.8859 216.381 34.8859C221.812 34.8859 224.384 31.1722 224.384 29.1725Z" fill="#1E1E1E"/>
                                <path d="M230.591 7.91016H233V36.4773H230.591V7.91016Z" fill="#1E1E1E"/>
                                <path d="M23.9629 41.6876C-0.258562 43.3336 -9.06514 11.1752 11.4541 0C4.81169 9.43395 6.0163 16.222 6.0163 16.222C8.71135 11.8213 13.8088 10.6378 15.9798 10.3114C4.21278 19.6229 8.1669 38.7765 23.9629 41.6808V41.6876Z" fill="#1E1E1E"/>
                                <path d="M43.6652 26.683C39.0578 44.6871 11.5559 42.9935 12.2705 22.9897C12.604 16.4805 17.9124 10.7875 23.6088 9.27071C19.0422 9.29111 17.1978 6.0467 18.4229 2.72068C18.5726 2.29897 18.4569 2.55744 18.6134 2.91112C21.254 7.19619 25.9159 3.6185 28.9853 8.0192C30.7888 7.76753 32.5651 10.4814 32.2384 11.5425C24.3438 8.07361 19.5458 20.6295 27.8215 23.3434C39.7724 25.9757 40.099 3.66611 33.3546 0C44.829 6.23715 48.1638 23.5815 37.5401 30.7028C41.5827 29.4853 43.672 26.6762 43.672 26.6762L43.6652 26.683Z" fill="#1E1E1E"/>
                            </svg>
                        </span>
                    </a>                       
                </div>
                <div class="nav-item">
                    <ul class="primary-menu">
                        <li><a href="#">software solutions</a></li>
                        <li>
                            <a href="#">services</a>
                            <ul class="sub-menu">
                                <li><a href="#">Penetration Testing</a></li>
                                <li>
                                    <a href="#">Vulnerability Scanning</a>
                                </li>
                                <li><a href="#">Threat Hunting</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Cyber War games</a></li>
                        <li><a href="#">Industry solutions</a></li>
                    </ul>
                    <div class="request-btn">
                        <a href="request-demo.php" class="btn-box big">Request a demo</a>
                    </div>
                </div>
                <div class="hamburger">
                    <span class="icon open">
                        <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 20V16.6667H30V20H0ZM0 11.6667V8.33333H30V11.6667H0ZM0 3.33333V0H30V3.33333H0Z" fill="black"/>
                        </svg>
                    </span>
                    <span class="icon close">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.66683 23.6668L0.333496 21.3335L9.66683 12.0002L0.333496 2.66683L2.66683 0.333496L12.0002 9.66683L21.3335 0.333496L23.6668 2.66683L14.3335 12.0002L23.6668 21.3335L21.3335 23.6668L12.0002 14.3335L2.66683 23.6668Z" fill="black"/>
                        </svg>
                    </span>
                </div>
            </nav>
            <div class="overlay"></div>
        </div>
    </header>