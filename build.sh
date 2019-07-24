#!/bin/sh
cd $TRAVIS_BUILD_DIR/src/code
sbt ++$TRAVIS_SCALA_VERSION package