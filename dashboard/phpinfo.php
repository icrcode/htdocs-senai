<?php
ob_start();
phpinfo();
$phpinfo = ob_get_clean();

$banner = '
<div style="
  background:#001F5A;
  height:60px;
  padding:0 2.5rem;
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:1rem;
  font-family:\'Segoe UI\',system-ui,sans-serif;
  position:sticky;
  top:0;
  z-index:9999;
  box-shadow:0 1px 0 rgba(255,255,255,.07),0 4px 16px rgba(0,0,0,.3);
">
  <div style="display:flex;align-items:center;gap:10px;">
    <a href="/dashboard/" style="display:flex;align-items:center;gap:10px;text-decoration:none;">
      <span style="background:#E8192C;color:#fff;font-weight:800;font-size:.82rem;letter-spacing:.08em;text-transform:uppercase;padding:4px 10px;border-radius:5px;">SENAI</span>
    </a>
    <span style="color:rgba(255,255,255,.25);font-size:1.1rem;">/</span>
    <nav style="display:flex;align-items:center;gap:.25rem;">
      <a href="/dashboard/" style="color:rgba(255,255,255,.7);text-decoration:none;font-size:.825rem;font-weight:500;padding:.4rem .75rem;border-radius:6px;">Início</a>
      <a href="/dashboard/senai.html" style="color:rgba(255,255,255,.7);text-decoration:none;font-size:.825rem;font-weight:500;padding:.4rem .75rem;border-radius:6px;">SENAI TDS</a>
      <span style="width:1px;height:20px;background:rgba(255,255,255,.15);margin:0 .25rem;display:inline-block;"></span>
      <a href="/phpmyadmin/" target="_blank" style="color:rgba(255,255,255,.5);text-decoration:none;font-size:.775rem;font-weight:500;padding:.4rem .75rem;border-radius:6px;">phpMyAdmin ↗</a>
    </nav>
  </div>
  <span style="color:rgba(255,255,255,.4);font-size:.75rem;">PHP Info · Ambiente SENAI TDS</span>
</div>';

echo str_replace('<body>', '<body>' . $banner, $phpinfo);
