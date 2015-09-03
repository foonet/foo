dpkg-deb -x package.deb extract/

dpkg-deb -e package.deb extract/DEBIAN

dpkg-deb -b extract/ build/

dpkg-sig -s foo foo.deb

dpkg-scanpackages . /dev/null | gzip -9c > Packages.gz

:-)
