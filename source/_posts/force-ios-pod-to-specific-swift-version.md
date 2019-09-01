---
extends: _layouts.post
section: content
title: How to set the Legacy Swift Version for each Pod in Podfile Xcode 9.0 Swift 3.2 / Swift 4.0
date: 1970-01-01
description: How to set the Legacy Swift Version for each Pod in Podfile Xcode 9.0 Swift 3.2 / Swift 4.0
cover_image: 
---

[https://stackoverflow.com/questions/40501440/how-to-set-the-legacy-swift-version-for-each-pod-in-podfile-xcode-9-0-swift-3-2](https://stackoverflow.com/questions/40501440/how-to-set-the-legacy-swift-version-for-each-pod-in-podfile-xcode-9-0-swift-3-2)
<br><br>
```php
post_install do |installer|
  installer.pods_project.targets.each do |target|
    if ['AirMapSDK', 'PhoneNumberKit', 'Lock', 'RxSwift', 'RxSwiftExt', 'RxCocoa', 'RxDataSources', 'ProtocolBuffers-Swift'].include? target.name
      target.build_configurations.each do |config|
        config.build_settings['SWIFT_VERSION'] = '3.2'
      end
    end
  end
end
```