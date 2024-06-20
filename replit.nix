{ pkgs }: {
  deps = [
    pkgs.php83
    pkgs.php82Packages.composer
    pkgs.cowsay
  ];
}