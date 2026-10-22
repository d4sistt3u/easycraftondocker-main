document.querySelectorAll('[data-like-toggle]').forEach((button) => {
  const unlikedColor = button.classList.contains('text-white') ? 'text-white' : 'text-secondary';
  const icon = button.querySelector('.bi');

  button.addEventListener('click', () => {
    const liked = button.getAttribute('aria-pressed') !== 'true';

    button.setAttribute('aria-pressed', String(liked));
    button.classList.toggle('text-danger', liked);
    button.classList.toggle(unlikedColor, !liked);
    icon.classList.toggle('bi-heart-fill', liked);
    icon.classList.toggle('bi-heart', !liked);
  });
});

const videoModal = document.getElementById('videoModal');

if (videoModal) {
  const modal = new bootstrap.Modal(videoModal);
  const modalVideo = videoModal.querySelector('video');

  document.querySelectorAll('[data-video-preview]').forEach((card) => {
    const video = card.querySelector('video');
    const thumbnail = card.querySelector('[data-video-thumbnail]');

    card.addEventListener('mouseenter', () => {
      if (videoModal.classList.contains('show')) return;
      video.src = video.dataset.src;
      video.play().catch((error) => {
        if (error.name !== 'AbortError') console.warn('Video preview could not play:', error);
      });
    });
    video.addEventListener('playing', () => {
      if (video.paused) return;
      thumbnail.classList.add('d-none');
      video.classList.remove('d-none');
    });
    card.addEventListener('mouseleave', () => {
      video.pause();
      video.removeAttribute('src');
      video.load();
      video.classList.add('d-none');
      thumbnail.classList.remove('d-none');
    });
    card.addEventListener('click', (event) => {
      if (event.target !== video && event.target !== thumbnail) return;
      video.pause();
      modalVideo.src = video.dataset.src;
      modal.show();
    });
  });

  videoModal.addEventListener('shown.bs.modal', () => {
    modalVideo.play().catch((error) => {
      if (error.name !== 'AbortError') console.warn('Video viewer could not play:', error);
    });
  });
  videoModal.addEventListener('hide.bs.modal', () => {
    modalVideo.pause();
    modalVideo.removeAttribute('src');
    modalVideo.load();
  });
  videoModal.querySelector('.modal-body').addEventListener('click', (event) => {
    if (event.target === event.currentTarget) modal.hide();
  });
}
