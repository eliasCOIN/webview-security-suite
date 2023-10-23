<?php
  // Redirects to a "content://" URI, attempting to access local content
  header("Location: content://0@media/external/file/123", true, 302);
  exit();
?>
