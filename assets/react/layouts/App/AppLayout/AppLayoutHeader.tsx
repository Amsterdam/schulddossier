/**
 * @license EUPL-1.2+
 * Copyright Gemeente Amsterdam
 */

import type { ReactNode } from "react";

import { Icon, PageHeader } from "@amsterdam/design-system-react";
import { CloseIcon, MenuIcon } from "@amsterdam/design-system-react-icons";

import { useAppLayoutContext } from "./AppLayoutContext";

type AppHeaderProps = {
  readonly appName: string
  readonly appNavigation?: ReactNode
  readonly menuButtonText?: string
};

export const AppLayoutHeader = ({ appName, appNavigation, menuButtonText = "Menu" }: AppHeaderProps) => {
  const { appNavigationOpen, setAppNavigationOpen } = useAppLayoutContext();

  const NavigationToggle = () => {
    return (
      <li className="ams-app__menu-toggle">
        <button
          aria-controls="ams-app-navigation-menu"
          aria-expanded={appNavigationOpen ? "true" : "false"}
          className="ams-page-header__mega-menu-button"
          type="button"
          onClick={() => {
            setAppNavigationOpen(!appNavigationOpen);
          }}
        >
          <span className="ams-page-header__mega-menu-button-label">{menuButtonText}</span>
          <span aria-hidden="true" className="ams-page-header__mega-menu-button-hidden-label">
            {menuButtonText}
          </span>
          <Icon svg={appNavigationOpen ? CloseIcon : MenuIcon} />
        </button>
      </li>
    );
  };

  return (
    <PageHeader
      brandName={appName}
      className="ams-app-header"
      menuItems={(
        <>
          {appNavigation}
          <NavigationToggle />
        </>
      )}
      noMenuButtonOnWideWindow
    />
  );
};

AppLayoutHeader.displayName = "AppLayout.Header";
