<style>
    /* Variabel dan Reset */
    :root {
        --primary: #2c3e50;
        --secondary: #3498db;
        --accent: #e74c3c;
        --light: #f8f9fa;
        --dark: #2c3e50;
        --text: #333;
        --text-light: #6c757d;
        --border: #dee2e6;
        --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        --transition: all 0.3s ease;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body.cv-body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: var(--text);
        background-color: var(--light);
    }

    .cv-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }

    /* Header Navigation */
    .cv-nav {
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        padding: 1rem 0;
        box-shadow: var(--shadow);
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav-brand {
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
        text-decoration: none;
    }

    .nav-actions {
        display: flex;
        gap: 1rem;
    }

    .btn {
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        transition: var(--transition);
        cursor: pointer;
    }

    .btn-primary {
        background-color: white;
        color: var(--primary);
    }

    .btn-primary:hover {
        background-color: var(--light);
        transform: translateY(-2px);
    }

    /* CV Layout */
    .cv-header {
        background: white;
        border-radius: 15px;
        padding: 3rem;
        margin-bottom: 2rem;
        box-shadow: var(--shadow);
        text-align: center;
    }

    .cv-name {
        font-size: 3rem;
        color: var(--primary);
        margin-bottom: 0.5rem;
        font-weight: 700;
    }

    .cv-title {
        font-size: 1.5rem;
        color: var(--secondary);
        margin-bottom: 1.5rem;
        font-weight: 300;
    }

    .contact-info {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 2rem;
        margin-top: 1.5rem;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--text-light);
    }

    /* Section Styling */
    .cv-section {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: var(--shadow);
    }

    .section-title {
        color: var(--primary);
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 3px solid var(--secondary);
        display: inline-block;
    }

    /* Grid Layout */
    .cv-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
    }

    @media (max-width: 768px) {
        .cv-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Skill Bars */
    .skill-item {
        margin-bottom: 1rem;
    }

    .skill-name {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
        font-weight: 500;
    }

    .skill-bar {
        height: 8px;
        background-color: var(--border);
        border-radius: 4px;
        overflow: hidden;
    }

    .skill-level {
        height: 100%;
        background: linear-gradient(90deg, var(--secondary), var(--primary));
        border-radius: 4px;
        transition: var(--transition);
    }

    /* Timeline */
    .timeline {
        position: relative;
        padding-left: 2rem;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 2px;
        background: var(--secondary);
    }

    .timeline-item {
        position: relative;
        margin-bottom: 2rem;
        padding-left: 2rem;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -1rem;
        top: 0.5rem;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: var(--secondary);
        border: 3px solid white;
        box-shadow: 0 0 0 2px var(--secondary);
    }

    .timeline-period {
        color: var(--secondary);
        font-weight: 600;
        margin-bottom: 0.25rem;
    }

    .timeline-title {
        font-weight: 600;
        margin-bottom: 0.25rem;
    }

    .timeline-subtitle {
        color: var(--text-light);
        margin-bottom: 0.5rem;
    }

    /* Project Cards */
    .project-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
    }

    .project-card {
        background: var(--light);
        border-radius: 10px;
        padding: 1.5rem;
        border-left: 4px solid var(--secondary);
        transition: var(--transition);
    }

    .project-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow);
    }

    .project-name {
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: var(--primary);
    }

    .project-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 1rem;
    }

    .tech-tag {
        background: var(--secondary);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    /* Footer */
    .cv-footer {
        background: var(--primary);
        color: white;
        padding: 2rem 0;
        margin-top: 3rem;
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        text-align: center;
    }

    /* Print Styles */
    @media print {
        .cv-nav,
        .cv-footer {
            display: none !important;
        }
        
        .cv-container {
            padding: 0;
            margin: 0;
        }
        
        .cv-section {
            box-shadow: none;
            border: 1px solid var(--border);
            margin-bottom: 1rem;
        }
        
        .cv-grid {
            display: block;
        }
    }
</style>