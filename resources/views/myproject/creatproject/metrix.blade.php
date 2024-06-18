<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Metrics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/metrix.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">IMM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="welcome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bootcamp</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">IMM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1 class="text-center">Select Metrics Based on Your Chosen Indicator</h1>
    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="text-primary">Assets Under Management: Total</h5>
                <p class="mb-0">Indicates whether the organization provides support to its clients after a sale of its product/service.</p>
            </div>
            <input type="checkbox" class="metric-checkbox">
        </div>
    </div>
    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="text-primary">Assets Under Management: Managed by Fund Managers from Historically Marginalized Groups</h5>
                <p class="mb-0">Value of the investing organization's assets under management (AUM) invested with fund managers from groups historically marginalized due to race and/or ethnicity as of the end of the reporting period.</p>
            </div>
            <input type="checkbox" class="metric-checkbox">
        </div>
    </div>
    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="text-primary">Assets Under Management: Total</h5>
                <p class="mb-0">Value of the investing organization's total assets under management as of the end of the reporting period.</p>
            </div>
            <input type="checkbox" class="metric-checkbox">
        </div>
    </div>
    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="text-primary">Average Agricultural Yield</h5>
                <p class="mb-0">Evaluates average agricultural yield per hectare of the set implied by another metric. For example, this metric applied to Client Individuals (PI4060) would yield the average agricultural yield of the organization's (farmer) clients. Organizations should calculate this metric for each individual agricultural product. See usage guidance for further information.</p>
            </div>
            <input type="checkbox" class="metric-checkbox">
        </div>
    </div>
    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="text-primary">Average Client Agricultural Yield: Total</h5>
                <p class="mb-0">Average agricultural yield per hectare of clients (who were farmers) of the organization during the reporting period.</p>
            </div>
            <input type="checkbox" class="metric-checkbox">
        </div>
    </div>
    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="text-primary">Bias-Reducing Investment Practices</h5>
                <p class="mb-0">Describes practices the investing organization implemented during the reporting period to reduce biases in investment criteria, policies, and processes that have disproportionately negative effects on entrepreneurs who are from groups historically marginalized due to race and/or ethnicity. See usage guidance for specific practices to address.</p>
            </div>
            <input type="checkbox" class="metric-checkbox">
        </div>
    </div>
    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="text-primary">Biodiversity Assessment</h5>
                <p class="mb-0">Indicates whether the organization has undertaken biodiversity-related assessments to evaluate the biological diversity and ecosystem condition present on the land that is directly or indirectly controlled by the organization.</p>
            </div>
            <input type="checkbox" class="metric-checkbox">
        </div>
    </div>
    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="text-primary">Bulk Cargo Handled</h5>
                <p class="mb-0">Volume of bulk cargo transported through a road, railway, port, or airport during the reporting period.</p>
            </div>
            <input type="checkbox" class="metric-checkbox">
        </div>
    </div>
    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="text-primary">Business Innovation</h5>
                <p class="mb-0">Describes whether the organization adopted or operationalized a product, internal process, technology, or financing structure that was new or not widely used in the operating geography and sector during the reporting period.</p>
            </div>
            <input type="checkbox" class="metric-checkbox">
        </div>
    </div>
    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="text-primary">Client Complaint Tracking System</h5>
                <p class="mb-0">Indicates whether the organization has a system in place to receive and resolve client complaints..</p>
            </div>
            <input type="checkbox" class="metric-checkbox">
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <button class="btn btn-secondary">Back</button>
        <a href="review" class="btn btn-primary">Next</a>

    </div>
    <div class="pagination mt-4">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">7</a></li>
            <li class="page-item"><a class="page-link" href="#">8</a></li>
            <li class="page-item"><a class="page-link" href="#">9</a></li>
            <li class="page-item"><a class="page-link" href="#">10</a></li>
        </ul>
    </div>
</div>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="brand-info">
                <h3>IMM</h3>
                <p>(TBN INDONESIA X MAXY ACADEMY)</p>
            </div>
            <div class="footer-links">
                <div class="footer-nav">
                         <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="bootcamp">Bootcamp</a></li>
                            <li><a href="imm">IMM</a></li>
                            <li><a href="comunity">Community</a></li>
                            <li><a href="profile">Profile</a></li>
                        </ul>
                </div>
                <div class="social-media">
                    <p class="footer-social-media">Social Media</p>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/imm/metrix.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
