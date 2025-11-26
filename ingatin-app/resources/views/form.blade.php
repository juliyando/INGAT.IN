<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 12px;">
            <div class="modal-body p-5">
                <h3 class="fw-bold mb-1" style="color: #DC3545;">Upload Dokumentasi</h3>
                <p class="text-muted mb-4">Upload dokumentasi kegiatan yang ingin kamu *share*</p>
                
                <form id="documentationForm" action="{{ route('documentation.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div id="dropzoneArea" class="border border-2 border-dashed p-5 text-center" style="border-radius: 8px; border-color: #DC3545; min-height: 250px;">
                                <i class="bi bi-cloud-upload-fill" style="font-size: 3rem; color: #DC3545;"></i>
                                <p class="mt-2 fw-bold text-muted">Tarik dan letakkan foto di sini</p>
                                <p class="text-muted small">-Atau-</p>
                                <label for="fileInput" class="btn btn-sm fw-bold" style="background-color: #88304E; color: white; cursor: pointer;">
                                    Upload Foto
                                </label>
                                <input type="file" id="fileInput" name="document_file" accept="image/*" class="d-none">
                                <p id="fileStatus" class="mt-2 small text-danger"></p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="activityName" class="form-label fw-bold small">Nama Kegiatan :</label>
                                <input type="text" class="form-control" id="activityName" name="activity_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold small">Deskripsi :</label>
                                <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="activityTime" class="form-label fw-bold small">Waktu :</label>
                                <input type="text" class="form-control" id="activityTime" name="activity_time">
                            </div>
                            <div class="mb-4">
                                <label for="activityLocation" class="form-label fw-bold small">Lokasi :</label>
                                <input type="text" class="form-control" id="activityLocation" name="activity_location">
                            </div>

                            <button type="submit" id="uploadButton" class="btn btn-lg fw-bold w-100" style="background-color: #DC3545; color: white;">
                                Upload Dokumentasi
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>