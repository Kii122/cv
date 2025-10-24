<section class="cv-section">
    <h3 class="section-title">Proyek</h3>
    <div class="project-grid">
        @foreach($projects as $project)
        <div class="project-card">
            <h4 class="project-name">{{ $project['name'] }}</h4>
            <p>{{ $project['description'] }}</p>
            <div class="project-tech">
                @foreach($project['technologies'] as $tech)
                <span class="tech-tag">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>